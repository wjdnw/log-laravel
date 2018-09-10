<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/8
 * Time: 16:54
 */

namespace App\Observers;


use Illuminate\Database\Eloquent\Model;

class ModelsObserver
{
    /**
     * 监听数据保存后的事件。
     *
     * @param  User $user
     * @return void
     */
    public function updated( Model $agents )
    {
        dump( 'updated', $agents );
        dd( $agents['original'], $agents['attributes'] );
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param  User $user
     * @return void
     */
    public function updating( Model $agents )
    {
        dump( 'updating', $agents );
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param  User $user
     * @return void
     */
    public function saving( Model $agents )
    {
        dump( 'saving', $agents );
    }

    /**
     * 监听数据保存后的事件。
     *
     * @param  User $user
     * @return void
     */
    public function saved( Model $agents )
    {
        dump( 'saved', $agents );
    }
}