<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/www/wwwroot/maccms10/application/admin/view/vodserver/index.html";i:1587810623;s:61:"/www/wwwroot/maccms10/application/admin/view/public/head.html";i:1587810623;s:61:"/www/wwwroot/maccms10/application/admin/view/public/foot.html";i:1587810623;}*/ ?>
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
    <div class="my-toolbar-box">

        <div class="layui-btn-group">
            <a data-href="<?php echo url('info'); ?>" class="layui-btn layui-btn-primary j-iframe"><i class="layui-icon">&#xe654;</i>添加</a>
        </div>

    </div>

    <form class="layui-form " method="post" id="pageListForm">
        <table class="layui-table" lay-size="sm">
            <thead>
            <tr>
                <th width="80">排序</th>
                <th width="80">编码</th>
                <th width="80">状态</th>
                <th width="150">名称</th>
                <th>备注</th>
                <th>提示</th>
                <th width="100">操作</th>
            </tr>
            </thead>

            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr>
                <td><?php echo $vo['sort']; ?></td>
                <td><?php echo $vo['from']; ?></td>
                <td><?php if($vo['status'] == 1): ?><span class="layui-badge layui-bg-green">启用</span><?php else: ?><span class="layui-badge">禁用</span><?php endif; ?> </td>
                <td><?php echo $vo['show']; ?></td>
                <td><?php echo $vo['des']; ?></td>
                <td><?php echo $vo['tip']; ?></td>
                <td>
                    <a class="layui-badge-rim j-iframe" data-href="<?php echo url('info?id='.$vo['from']); ?>" href="javascript:;" title="编辑">编辑</a>
                    <a class="layui-badge-rim j-tr-del" data-href="<?php echo url('del?ids='.$vo['from']); ?>" href="javascript:;" title="删除">删除</a>
                </td>
            </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>

    </form>
</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">

</script>
</body>
</html>