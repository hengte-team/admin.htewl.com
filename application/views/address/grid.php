<?php $this->load->view('layout/header');?>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <h3 class="page-title">用户账号管理 <small> 地址管理</small></h3>
            <?php echo breadcrumb(array('user/grid'=>'用户账号管理', 'address/grid/'.$uid=>'地址管理')); ?>
        </div>
    </div>
    <?php echo execute_alert_message() ?>
    <div class="row-fluid">
        <div class="span12">
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-reorder"></i>列表</div>
                    <div class="tools">
                        <a class="collapse" href="javascript:;"></a>
                        <a class="remove" href="javascript:;"></a>
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <div class="dataTables_wrapper form-inline">
                        <div class="clearfix">
                            <a href="<?php echo base_url('address/add/'.$uid);?>" class="add-button-link">
                                <div class="btn-group">
                                    <button class="btn green"><i class="icon-plus"></i> 添加</button>
                                </div>
                            </a>
                        </div>
                        <?php if (count($res) > 0) :?>
                        <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead class="flip-content">
                                <tr>
                                    <th><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"></th>
                                    <th>编号</th>
                                    <th>详细地址</th>
                                    <th>邮编</th>
                                    <th>收货人</th>
                                    <th>电话</th>
                                    <th>是否默认</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($res as $item) : ?>
                                <tr>
                                    <td width="15"><input type="checkbox" class="checkboxes" value="<?php echo $item->address_id ?>" ></td>
                                    <td><?php echo $item->address_id;?></td>
                                    <td><?php echo $item->detailed;?></td>
                                    <td><?php echo $item->code;?></td>
                                    <td><?php echo $item->receiver_name;?></td>
                                    <td><?php echo $item->tel;?></td>
                                    <td><?php echo $item->is_default == 2 ? '是' : '否';?></td>
                                    <td width="145">
                                        <a class="btn mini green" href="<?php echo base_url('address/edit/'.$item->address_id.'?uid='.$uid); ?>"><i class="icon-edit"></i> 编辑</a>
                                        <a class="btn mini green" href="<?php echo base_url('address/delete/'.$item->address_id.'?uid='.$uid); ?>" onclick="return confirm('确定要删除？')"><i class="icon-trash"></i> 删除</a>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <?php else: ?>
                            <div class="alert"><p>未找到数据。<p></div>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php $this->load->view('layout/footer');?>