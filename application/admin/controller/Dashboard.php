<?php

namespace app\admin\controller;

use think\Db;
use think\Config;
use app\common\controller\Backend;

/**
 * 控制台
 *
 * @icon fa fa-dashboard
 * @remark 用于展示当前系统中的统计数据、统计报表及重要实时数据
 */
class Dashboard extends Backend
{

    /**
     * 查看
     */
    public function index()
    {
        $seventtime = \fast\Date::unixtime('day', -7);
        $paylist = $createlist = [];
        for ($i = 0; $i < 7; $i++)
        {
            $day = date("Y-m-d", $seventtime + ($i * 86400));
            $createlist[$day] = mt_rand(20, 200);
            $paylist[$day] = mt_rand(1, mt_rand(1, $createlist[$day]));
        }
        $hooks = config('addons.hooks');
        $uploadmode = isset($hooks['upload_config_init']) && $hooks['upload_config_init'] ? implode(',', $hooks['upload_config_init']) : 'local';
        $addonComposerCfg = ROOT_PATH . '/vendor/karsonzhang/fastadmin-addons/composer.json';
        Config::parse($addonComposerCfg, "json", "composer");
        $config = Config::get("composer");
        $addonVersion = isset($config['version']) ? $config['version'] : __('Unknown');
        $this->view->assign([
            'totaluser'        => Db::name('user')->count(),
            'totalcash'       => Db::name('cash')->where('status', 1)->sum('money'),
            'totalorder'       => Db::name('invest')->count(),
            'totalorderamount' => Db::name('recharge')->where('status', 1)->sum('money'),
            'todayuserrecom'   => Db::name('user')->where('createtime', 'gt', strtotime(date('Y-m-d 00:00:00')))->where('top', 'neq', '0')->count(),
            'todayusersignup'  => Db::name('user')->where('createtime', 'gt', strtotime(date('Y-m-d 00:00:00')))->count(),
            'todayrecharge'       => Db::name('recharge')->where('status', 1)->where('handletime', 'gt', strtotime(date('Y-m-d 00:00:00')))->sum('money'),
            'todaycash'    => Db::name('cash')->where('status', 1)->where('handletime', 'gt', strtotime(date('Y-m-d 00:00:00')))->sum('money'),
            'todayinvest'         => Db::name('invest')->where('createtime', 'gt', strtotime(date('Y-m-d 00:00:00')))->count(),
            'todayinvestmoney'         => Db::name('invest')->where('createtime', 'gt', strtotime(date('Y-m-d 00:00:00')))->sum('money'),

            'todayback'         => Db::name('invest_list')
            ->where('plantime', 'lt',
                strtotime(date('Y-m-d 00:00:00', strtotime('+1 day'))))
            ->where('plantime', 'gt', strtotime(date('Y-m-d 00:00:00')))
            ->sum('pay1'),
            'todayneed'          => Db::name('invest_list')
            ->where('plantime', 'lt',
                strtotime(date('Y-m-d 00:00:00', strtotime('+1 day'))))
            ->where('plantime', 'gt', strtotime(date('Y-m-d 00:00:00')))
            ->where('money2', 'gt', '0')->sum('pay1'),
            'tomorrowneed'       => Db::name('invest_list')
            ->where('plantime', 'gt',
                strtotime(date('Y-m-d 00:00:00', strtotime('+1 day'))))
            ->where('plantime', 'lt',
                strtotime(date('Y-m-d 00:00:00', strtotime('+2 day'))))
            ->where('money2', 'gt', '0')->sum('pay1'),
            'aftertomorrowneed'       => Db::name('invest_list')
            ->where('plantime', 'gt',
                strtotime(date('Y-m-d 00:00:00', strtotime('+2 day'))))
            ->where('plantime', 'lt',
                strtotime(date('Y-m-d 00:00:00', strtotime('+3 day'))))
            ->where('money2', 'gt', '0')->sum('pay1'),
            'uploadmode'       => $uploadmode
        ]);

        return $this->view->fetch();
    }

}
