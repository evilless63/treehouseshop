<?php
    /**
     * Created by PhpStorm.
     * User: Sasha San
     * Date: 09.06.2019
     * Time: 4:17
     */

    namespace App\Repositories\Admin;

    use App\Models\Admin\Banner as Model;
    use App\Models\Admin\Banner;
    use App\Repositories\CoreRepository;
    use App\SBlog\Core\BlogApp;
    use Illuminate\Support\Facades\Session;


    class BannerRepository extends CoreRepository
    {

        public function __construct()
        {
            parent::__construct();
        }

        /**
         * @return mixed
         */
        protected function getModelClass()
        {
            return Model::class;
        }

        /** INDEX PAGE */
        public function getAllBanners($perpage)
        {
            $get_all = $this->startConditions()
                ->select('banners.*')
                ->orderBy(\DB::raw('LENGTH(banners.title)', "banners.title"))
                ->limit($perpage)
                ->paginate($perpage);

            return $get_all;
        }

        /** Get Info for One Banner by Id */
        public function getInfoBanner($id)
        {
            $banner = $this->startConditions()
                ->find($id);
            return $banner;
        }

        /** Count banners */
        public function getCountBanners()
        {
            $count = $this->startConditions()
                ->count();
            return $count;
        }

        /** Choose type directory (mobile or not) */
        public function chooseBannerDirectory($isMobile) {
            if($isMobile) {
                $directory = 'banners_media_mobile';
            } else {
                $directory = 'banners_media';
            }

            return $directory;
        }

        /**  Upload Single Image*/
        public function uploadImg($name, $wmax, $hmax, $isMobile = false)
        {
            $directory = $this->chooseBannerDirectory($isMobile);

            $uploaddir = 'uploads/' . $directory . '/';

            $ext = strtolower(preg_replace("#.+\.([a-z]+)$#i", "$1", $name));
            $uploadfile = $uploaddir . $name;

            \Session::put($directory, $name);
            
            self::resize($uploadfile, $uploadfile, $wmax, $hmax, $ext);

        }


        /** Get Image for Create New Banner
         * @param Banner $banner
         */
        public function getImg(Banner $banner, $isMobile = false)
        {
            $directory = $this->chooseBannerDirectory($isMobile);

            clearstatcache();
            if (!empty(\Session::get($directory))) {
                $name = \Session::get($directory);
                $banner->img = $name;
                \Session::forget($directory);
                return;
            }
            if (empty(\Session::get('single')) && !is_file(WWW . '/uploads/single/' . $banner->img)) {
                $banner->img = null;
            }
            return;
        }

        /**  Resize Images for My needs */
        public static function resize($target, $dest, $wmax, $hmax, $ext)
        {
            list($w_orig, $h_orig) = getimagesize($target);
            $ratio = $w_orig / $h_orig;

            if (($wmax / $hmax) > $ratio) {
                $wmax = $hmax * $ratio;
            } else {
                $hmax = $wmax / $ratio;
            }

            $img = "";
            // imagecreatefromjpeg | imagecreatefromgif | imagecreatefrompng
            switch ($ext) {
                case("gif"):
                    $img = imagecreatefromgif($target);
                    break;
                case("png"):
                    $img = imagecreatefrompng($target);
                    break;
                default:
                    $img = imagecreatefromjpeg($target);
            }
            $newImg = imagecreatetruecolor($wmax, $hmax);
            if ($ext == "png") {
                imagesavealpha($newImg, true);
                $transPng = imagecolorallocatealpha($newImg, 0, 0, 0, 127);
                imagefill($newImg, 0, 0, $transPng);
            }
            imagecopyresampled($newImg, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig,
                $h_orig); // копируем и ресайзим изображение
            switch ($ext) {
                case("gif"):
                    imagegif($newImg, $dest);
                    break;
                case("png"):
                    imagepng($newImg, $dest);
                    break;
                default:
                    imagejpeg($newImg, $dest);
            }
            imagedestroy($newImg);
        }

        /**  Turn Status = 1 */
        public function returnStatusOne($id)
        {
            if (isset($id)) {
                $st = \DB::update("UPDATE banners SET is_active = '1' WHERE id = ?", [$id]);
                if ($st){
                    return true;
                } else {
                    return false;
                }
            }
        }

        /**  Turn Status = 0 */
        public function deleteStatusOne($id)
        {
            if (isset($id)) {
                $st = \DB::update("UPDATE banners SET is_active = '0' WHERE id = ?", [$id]);
                if ($st){
                    return true;
                } else {
                    return false;
                }
            }
        }


        /**  Delete Gallery after del one banner */
        public function deleteImgGalleryFromPath($id)
        {

            $singleImg = \DB::table('banners')
                ->select('media')
                ->where('id', $id)
                ->pluck('media')
                ->all();

            $singleImgMobile = \DB::table('banners')
                ->select('mobile_media')
                ->where('id', $id)
                ->pluck('mobile_media')
                ->all();

            if (!empty($singleImg)){
                @unlink("uploads/banners_media/".$singleImg[0]);
            }

            if (!empty($singleImgMobile)){
                @unlink("uploads/banners_media_mobile/".$singleImg[0]);
            }

        }


        /** Delete from DB */
        public function deleteFromDB($id)
        {
            if (isset($id)){
                $banner = \DB::delete('DELETE FROM banners WHERE id = ?', [$id]);

                if ($banner){
                    return true;
                }
            }
        }


    }
