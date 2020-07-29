<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:28:"../template/mobile/task.html";i:1595788870;}*/ ?>
<ul class="dropdown-menu dropdown-tasks" style="width:100%">
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>每天登录领取</strong>
                    <?php if($isCheck == 0): ?>
                    <button type="button" class="pull-right btn btn-success btn-xs" onclick="getTaskReward(this,1)">领取奖励</button>
                    <?php else: ?>
                    <span class="pull-right text-muted">今日已领取</span>
                    <?php endif; ?>
 </p>

                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: 2900%">
                        <span class="sr-only">2900%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>累计投资金额1000</strong>
                    <span class="pull-right text-muted">0/1000</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>投资项目2次</strong>
                    <span class="pull-right text-muted">0/1</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>每天投资项目</strong>
                    <span class="pull-right text-muted">0/1</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>累计收获果实1次</strong>
                    <span class="pull-right text-muted">0/1</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <!-- <li>
        <a href="#">
            <div>
                <p>
                    <strong>累计种树成就1棵</strong>
                    <span class="pull-right text-muted">0/1</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li> -->
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>累计收获果实100个</strong>
                    <span class="pull-right text-muted">0/100</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>累计连续浇水5天</strong>
                    <span class="pull-right text-muted">4/5</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width: 80%">
                        <span class="sr-only">80%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>
    <li>
        <a href="#">
            <div>
                <p>
                    <strong>邀请好友得10个果实</strong>
                    <span class="pull-right text-muted">0/1</span> </p>
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 0%">
                        <span class="sr-only">0%</span>
                    </div>
                </div>

            </div>
        </a>
    </li>
    <li class="divider"></li>

</ul>