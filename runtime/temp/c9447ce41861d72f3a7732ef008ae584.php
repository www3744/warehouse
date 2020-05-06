<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\phpstudy_pro\WWW\warehouse\public/../app/admin\view\main\index.html";i:1573613444;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>tplay_main</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <script src="/static/public/echarts/echarts.min.js"></script>
  <link rel="stylesheet" href="/static/public/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all">
  <link rel="stylesheet" href="/static/admin/css/admin-1.css" media="all">
<body class="layui-layout-body" style="overflow-y:visible;">
    <div class="layadmin-tabsbody-item layui-show"><div class="layui-fluid">
  <div class="layui-row layui-col-space15">
    <div class="layui-col-md8">
      <div class="layui-row layui-col-space15">
        <div class="layui-col-md6">
          <div class="layui-card">
            <div class="layui-card-header">网站数据</div>
            <div class="layui-card-body">

              <div class="layui-carousel layadmin-carousel layadmin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 280px;">
                <div carousel-item="">
                  <ul class="layui-row layui-col-space10 layui-this">
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>会员</h3>
                        <p><cite><?php echo $web['user_num']; ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>文件</h3>
                        <p><cite><?php echo $web['file_num']; ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>留言</h3>
                        <p><cite><?php echo $web['message_num']; ?></cite></p>
                      </a>
                    </li>
                  </ul>
                </div>
              <button class="layui-icon layui-carousel-arrow" lay-type="sub"></button><button class="layui-icon layui-carousel-arrow" lay-type="add"></button></div>
            </div>
          </div>
        </div>
        <div class="layui-col-md6">
          <div class="layui-card">
            <div class="layui-card-header">待办事项</div>
            <div class="layui-card-body">

              <div class="layui-carousel layadmin-carousel layadmin-backlog" lay-anim="" lay-indicator="inside" lay-arrow="none" style="width: 100%; height: 280px;">
                <div carousel-item="">
                  <ul class="layui-row layui-col-space10 layui-this">
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>黑名单</h3>
                        <p><cite><?php echo $web['ip_ban']; ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>待审文件</h3>
                        <p><cite><?php echo $web['status_file']; ?></cite></p>
                      </a>
                    </li>
                    <li class="layui-col-xs6">
                      <a lay-href="" class="layadmin-backlog-body">
                        <h3>待处理留言</h3>
                        <p><cite><?php echo $web['look_message']; ?></cite></p>
                      </a>
                    </li>
                  </ul>
                </div>
              <button class="layui-icon layui-carousel-arrow" lay-type="sub"></button><button class="layui-icon layui-carousel-arrow" lay-type="add"></button></div>
            </div>
          </div>
        </div>
        <div class="layui-col-md12">
          <div class="layui-card">
            <div class="layui-card-header">管理员登录</div>
            <div class="layui-card-body" id="main" style="height: 450px;">

            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="layui-col-md4">
      <div class="layui-card">
        <div class="layui-card-header">版本信息</div>
        <div class="layui-card-body layui-text">
          <table class="layui-table">
            <colgroup>
              <col width="100">
              <col>
            </colgroup>
            <tbody>
              <tr>
                <td>当前版本</td>
                <td>
                    Tplay <?php echo $info['tplay']; ?>
                    <a href="http://tplay.pengyichen.cn/tplay/public/index/index/log.shtml" target="_blank" style="padding-left: 15px;">更新日志</a> 
                </td>
              </tr>
              <tr>
                <td>基于框架</td>
                <td>
                 layui-v2.2.5 / thinkphp-v<?php echo $info['tp']; ?> 
               </td>
              </tr>
              <tr>
                <td>主要特色</td>
                <td>适配强 / 高颜值 / 清爽 / 简洁</td>
              </tr>
              <tr>
                <td>下载交流</td>
                <td style="padding-bottom: 0;">
                  <div class="layui-btn-container">
                    <a href="https://jq.qq.com/?_wv=1027&k=5wZeNTd" target="_blank" class="layui-btn layui-btn-danger layui-btn-sm">官方交流群</a>
                    <a href="http://tplay.pengyichen.cn" target="_blank" class="layui-btn layui-btn-sm">下载最新版</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="layui-card">
        <div class="layui-card-header">
          官方公告
        </div>
        <div class="layui-card-body layui-text layadmin-text">
          <p>Tplay后台管理框架搭载的是国内最受欢迎的两大框架Layui和ThinkPHP，ThinkPHP的大道至简和Layui的简而全在理念上可谓是不谋而合，两大框架结合所产生的结果就是将WEB开发精简到了极致。</p>
        </div>
      </div>

      <div class="layui-card">
        <div class="layui-card-header">系统信息</div>
        <div class="layui-card-body layui-text">
          <table class="layui-table">
            <colgroup>
              <col width="200">
              <col>
            </colgroup>
            <tbody>
              <tr>
                <td>操作系统</td>
                <td>
                    <?php echo $info['win']; ?> 
                </td>
              </tr>
              <tr>
                <td>PHP版本</td>
                <td>
                 <?php echo $info['php']; ?> 
               </td>
              </tr>
              <tr>
                <td>运行环境</td>
                <td><?php echo $info['environment']; ?></td>
              </tr>
              <tr>
                <td>上传最大限制</td>
                <td>
                  <?php echo $info['upload_size']; ?>
                </td>
              </tr>
              <tr>
                <td>执行时间限制</td>
                <td>
                  <?php echo $info['execution_time']; ?>
                </td>
              </tr>
              <tr>
                <td>剩余空间大小</td>
                <td>
                  <?php if(!(empty($info['disk']) || (($info['disk'] instanceof \think\Collection || $info['disk'] instanceof \think\Paginator ) && $info['disk']->isEmpty()))): ?><?php echo $info['disk']; else: ?>未知<?php endif; ?>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
    
  </div>
  </div>
  </div>



<script type="text/javascript">
var a = "<?php echo $web['date_string']; ?>";
var date = a.split(",");

var b = "<?php echo $web['login_sum']; ?>";
var login_sum = b.split(",");


var myChart = echarts.init(document.getElementById('main'));

option = {
    tooltip: {
        trigger: 'axis',
        position: function (pt) {
            return [pt[0], '10%'];
        }
    },
    grid: {
        top: 50,
        bottom: 70,
        left:40,
        right:50
    },
    toolbox: {
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            restore: {},
            saveAsImage: {}
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: date
    },
    yAxis: {
        type: 'value',
        boundaryGap: [0, '100%']
    },
    dataZoom: [{
        type: 'inside',
        start: 0,
        end: 100
    }, {
        start: 0,
        end: 100,
        handleIcon: 'M10.7,11.9v-1.3H9.3v1.3c-4.9,0.3-8.8,4.4-8.8,9.4c0,5,3.9,9.1,8.8,9.4v1.3h1.3v-1.3c4.9-0.3,8.8-4.4,8.8-9.4C19.5,16.3,15.6,12.2,10.7,11.9z M13.3,24.4H6.7V23h6.6V24.4z M13.3,19.6H6.7v-1.4h6.6V19.6z',
        handleSize: '100%',
        handleStyle: {
            color: '#fff',
            shadowBlur: 3,
            shadowColor: '#009688',
            shadowOffsetX: 2,
            shadowOffsetY: 2
        }
    }],
    series: [
        {
            name:'管理员登录',
            type:'line',
            smooth:true,
            symbol: 'none',
            sampling: 'average',
            itemStyle: {
                normal: {
                    color: '#009688'
                }
            },
            areaStyle: {
                normal: {
                    color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                        offset: 0,
                        color: '#009688'
                    }, {
                        offset: 1,
                        color: '#009688'
                    }])
                }
            },
            data: login_sum
        }
    ]
};
myChart.setOption(option);
</script>
</body>
</html>