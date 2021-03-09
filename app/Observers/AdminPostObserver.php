<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Carbon;
use Symfony\Component\Console\Input\Input;


class AdminPostObserver
{


    public function creating(Post $post)
    {
        $this->setAlias($post);
    }


    /**
     * Handle the post "created" event.
     *
     * @param  \App\Models\Post  $product
     * @return void
     */
    public function created(Post $post)
    {
        //
    }

    /**
     * Handle the post "updated" event.
     *
     * @param  \App\Models\Post  $product
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the post "deleted" event.
     *
     * @param  \App\Models\Post  $product
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the post "restored" event.
     *
     * @param  \App\Models\Post  $product
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the post "force deleted" event.
     *
     * @param  \App\Models\Post $product
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }


    public function setAlias(Post $post)
    {

        if (empty($post->alias)){
            $post->alias = \Str::slug($post->title);

            $check = Post::where('alias','=', $post->alias)->exists();

            if ($check){
                $post->alias = \Str::slug($post->title) . \Str::random(5);
            }
        }
    }

    public function saving(Post $post)
    {
        $this->setPublishedAt($post);
        //return false;
    }

    public function setPublishedAt(Post $post)
    {
        $needSetPublished = empty($post->updated_at) || !empty($post->updated_at);

        if ($needSetPublished){
            $post->updated_at = Carbon::now();
        }
    }


}
