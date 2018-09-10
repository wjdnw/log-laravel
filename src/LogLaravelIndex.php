<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/9/4
 * Time: 15:44
 */

namespace Wjdnw\LogLaravel;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;
use Wjdnw\LogLaravel\Models\ActionLog;
use Wjdnw\LogLaravel\Repositories\ActionLogRepository;

class LogLaravelIndex
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test_rtn($msg = '')
    {
//        dd($this->config);
        $config_arr = $this->config->get('logLaravelConfig.model');

        if( $config_arr ){
            foreach( $config_arr as $k => $v ) {
//                dd( $v );
                $v::updated(function($data){
                    ActionLog::createActionLog('update',"更新的id:".$data->id);
                });

                Model::saved(function($data){
                    dd( $data );
                    ActionLog::createActionLog('add',"添加的id:".$data->id);
                });

                $v::deleted(function($data){
                    dd( $data );
                    ActionLog::createActionLog('delete',"删除的id:".$data->id);
                });

            }
        }

        return [$msg.' <strong>from your custom develop package!</strong>>', $config_arr];
    }
}