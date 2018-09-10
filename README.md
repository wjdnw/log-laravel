# log-laravel
log for laravel


1、composer 组建到本地
2、修改 config/app.php
   添加服务，在 app.php 中的 providers 中添加一个项：
   Wjdnw\LogLaravel\LogLaravelServiceProvider::class,
   
   添加别名，在 app.php 中的 aliases 中添加一个项：
   'LogLaravel'  => Wjdnw\LogLaravel\Facades\LogLaravelFacade::class,
   
3、发布资源文件：
   php artisan vendor:publish --provider="Wjdnw\LogLaravel\LogLaravelServiceProvider"
   这时候，在项目根目录，config目录中，自动多加个文件，logLaravelConfig 配置文件
   app/Observer 目录中，多加个ModelObserver.php文件
   
4、写观察这模式
   在app/Providers中，编辑AppServiceProvider.php文件，
   public function boot()
   {
       $config = config('logLaravelConfig.model');
       if ( $config ) {
           foreach ($config as $model) {
               $model::observe(\App\Observers\ModelsObserver::class);
           }
       }
    //Schema::defaultStringLength(191);

   }
       
5、把所有的模型路径，配置到 config/logLaravelConfig 配置文件中
