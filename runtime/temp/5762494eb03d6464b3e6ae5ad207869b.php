<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:64:"/www/wwwroot/maccms10/application/admin/view/vodplayer/info.html";i:1587810623;s:61:"/www/wwwroot/maccms10/application/admin/view/public/head.html";i:1587810623;s:61:"/www/wwwroot/maccms10/application/admin/view/public/foot.html";i:1587810623;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $title; ?> - 请勿泄露后台地址 - Copyright by 苹果CMS内容管理系统</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css?v=1024">
    <link rel="stylesheet" href="/static/css/admin_style.css?v=1024">
    <script type="text/javascript" src="/static/js/jquery.js?v=1024"></script>
    <script type="text/javascript" src="/static/layui/layui.js?v=1024"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">
    <form class="layui-form layui-form-pane" method="post" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">基本设置</li>
                <li>播放器代码</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <div class="layui-form-item">
                        <label class="layui-form-label">状态：</label>
                        <div class="layui-input-block">
                            <input name="status" type="radio" id="rad-1" value="0" title="禁用" <?php if($info['status'] != 1): ?>checked <?php endif; ?>>
                            <input name="status" type="radio" id="rad-2" value="1" title="启用" <?php if($info['status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">编码：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['from']; ?>" placeholder="唯一标识英文、纯数字会自动加_" id="from" name="from" <?php if($info['from'] != ''): ?> readonly="readonly"<?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">名称：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['show']; ?>" placeholder="中文播放器名称" id="show" name="show">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">备注：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['des']; ?>" placeholder="des备注信息" id="des" name="des">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">目标窗口：</label>
                        <div class="layui-input-block">
                            <input name="target" type="radio" value="_self" title="当前" <?php if($info['target'] != '_blank'): ?>checked <?php endif; ?>>
                            <input name="target" type="radio" value="_blank" title="新页" <?php if($info['target'] == '_blank'): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">解析状态：</label>
                        <div class="layui-input-block">
                            <input name="ps" type="radio" value="0" title="禁用" <?php if($info['ps'] != 1): ?>checked <?php endif; ?>>
                            <input name="ps" type="radio" value="1" title="启用" <?php if($info['ps'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">解析接口：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['parse']; ?>" placeholder="独立解析地址，权重高于全局播放器设置的解析" id="parse" name="parse">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">排序：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['sort']; ?>" placeholder="数值越大排列越靠前" id="sort" name="sort">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">提示：</label>
                        <div class="layui-input-block">
                            <textarea name="tip" cols="" style="height:50px;min-height:50px;" class="layui-textarea"  placeholder="tip提示信息" ><?php echo $info['tip']; ?></textarea>
                        </div>
                    </div>
              </div>
                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label">文件：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="/static/player/<?php echo $info['from']; ?>.js" disabled="disabled">

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">代码：</label>
                        <div class="layui-input-block">
                            <textarea name="code" cols="" rows="20" class="layui-textarea"  placeholder="播放器JS代码" ><?php echo $info['code']; ?></textarea>
                        </div>
                    </div>
                </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">

    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            from: function (value) {
                if (value == "") {
                    return "请输入编码";
                }
            },
            show: function (value) {
                if (value == "") {
                    return "请输入名称";
                }
            }
        });


    });
</script>

</body>
</html>