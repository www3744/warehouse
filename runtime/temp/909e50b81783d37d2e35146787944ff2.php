<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\xampp\htdocs\tplay\public/../app/admin\view\goods\add.html";i:1551834407;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="stylesheet" href="/static/public/layui/css/layui.css"  media="all">
  <link rel="stylesheet" href="/static/public/font-awesome/css/font-awesome.min.css" media="all" />
  <link rel="stylesheet" href="/static/admin/css/admin.css"  media="all">
</head>
<body style="padding:10px;">
  <div class="tplay-body-div">
    <div class="layui-tab">
      <ul class="layui-tab-title">
        <li><a href="<?php echo url('admin/goods/index'); ?>" class="a_menu">服务管理</a></li>
        <li class="layui-this">新增服务</li>
      </ul>
    </div> 
    <div style="margin-top: 20px;">
    </div>
    <form class="layui-form" id="admin">
      
      <div class="layui-form-item">
        <label class="layui-form-label">标题</label>
        <div class="layui-input-block" style="max-width:600px;">
          <input name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
        </div>
      </div>

      <div class="layui-form-item">
        <label class="layui-form-label">价格</label>
        <div class="layui-input-block" style="max-width:600px;">
          <input name="price" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input" type="text">
        </div>
      </div>

      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">内容</label>
        <div class="layui-input-block" style="max-width:1000px;">
          <textarea placeholder="请输入内容" class="layui-textarea" name="content" id="container" style="border:0;padding:0"><?php if(!(empty($article['content']) || (($article['content'] instanceof \think\Collection || $article['content'] instanceof \think\Paginator ) && $article['content']->isEmpty()))): ?><?php echo $article['content']; endif; ?></textarea>
        </div>
      </div>
      

      <div class="layui-form-item">
        <label class="layui-form-label">分类</label>
        <div class="layui-input-block" style="max-width:600px;">
          <select name="cid" >
            <?php foreach($cate as $k => $v): if($v['pid'] == 0): foreach($cate as $ka => $va): if($v['id'] == $va['pid']): foreach($cate as $kb=>$vb): if($vb['pid'] == $va['id']): ?>
            <option value="<?php echo $vb['id']; ?>" selected><?php echo $vb['name']; ?></option>   
            <?php endif; endforeach; endif; endforeach; endif; endforeach; ?>
          </select>
        </div>
      </div>


      <div class="layui-upload" id="upload-thumb">
        <label class="layui-form-label">缩略图</label>
        <button type="button" class="layui-btn" id="thumb">上传图片</button>
        <div class="layui-upload-list">
          <label class="layui-form-label"></label>
          <img class="layui-upload-img" id="demo1" width="150" height="150" name="image">
          <input type="hidden" name="thumb" value="">
          <p id="demoText"></p>
        </div>
      </div>

      <input type="hidden" name="id" value="">

      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit lay-filter="admin">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
      </div>
      
    </form>


    <script src="/static/public/layui/layui.js"></script>
    <script src="/static/public/jquery/jquery.min.js"></script>
    <!-- <script>
        var message;
        layui.config({
            base: '/static/admin/js/',
            version: '1.0.1'
        }).use(['app', 'message'], function() {
            var app = layui.app,
                $ = layui.jquery,
                layer = layui.layer;
            //将message设置为全局以便子页面调用
            message = layui.message;
            //主入口
            app.set({
                type: 'iframe'
            }).init();
        });
    </script> -->
    <script>
    layui.use('upload', function(){
      var upload = layui.upload;
      //执行实例
      var uploadInst = upload.render({
        elem: '#thumb' //绑定元素
        ,url: "<?php echo url('common/upload'); ?>" //上传接口
        ,data:{use:'article_thumb'}
        ,done: function(res){
          //上传完毕回调
          if(res.code == 2) {
            $('#demo1').attr('src',res.src);
            $('#upload-thumb').append('<input type="hidden" name="thumb" value="'+ res.id +'">');
          } else {
            layer.msg(res.msg);
          }
        }
        ,error: function(){
          //请求异常回调
          //演示失败状态，并实现重传
          var demoText = $('#demoText');
          demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
          demoText.find('.demo-reload').on('click', function(){
            uploadInst.upload();
          });
        }
      });
    });
    </script>
    <script>
      layui.use(['layer', 'form'], function() {
          var layer = layui.layer,
              $ = layui.jquery,
              form = layui.form;
          $(window).on('load', function() {
              form.on('submit(admin)', function(data) {
                  $.ajax({
                      url:"<?php echo url('admin/goods/add'); ?>",
                      data:$('#admin').serialize(),
                      type:'post',
                      async: false,
                      success:function(res) {
                          if(res.code == 1) {
                              layer.alert(res.msg, function(index){
                                location.href = res.url;
                              })
                          } else {
                              layer.msg(res.msg);
                          }
                      }
                  })
                  return false;
              });
          });
      });
    </script>

    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain">
        这里写你的初始化内容
    </script>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/static/public/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/static/public/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
    </script>
  </div>
</body>
</html>