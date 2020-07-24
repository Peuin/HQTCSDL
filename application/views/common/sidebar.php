<div class="sidebar sidebar-fixed hidden-xs hidden-sm hidden-md" id="sidebar">
    <ul class="nav nav-pills nav-list nav-stacked">
        <?php if (in_array(19, $user['group_permission'])) : ?>
        <li id="pos"><a href="pos" style="color: white;background-color: #ffb752!important;"><i class="fa fa-tachometer"></i>Pos bán hàng</a></li>
        <?php endif; ?>
        <?php if (in_array(1, $user['group_permission'])) : ?>
            <li id="dashboard"><a href="dashboard"><i class="fa fa-tachometer"></i>Tổng quan</a></li>
            
        <?php endif; ?>
        <?php if (in_array(2, $user['group_permission'])) : ?>
            <li id="orders"><a href="orders"><i class="fa fa-shopping-cart"></i>Đơn hàng</a></li>
        <?php endif; ?>
        <?php if (in_array(3, $user['group_permission'])) : ?>
            <li id="product"><a href="product"><i class="fa fa-barcode"></i>Sản phẩm</a></li>
        <?php endif; ?>
        <?php if (in_array(4, $user['group_permission'])) : ?>
            <li id="customer"><a href="customer"><i class="fa fa-users"></i>Khách hàng</a></li>
        <?php endif; ?>
        <?php if (in_array(7, $user['group_permission'])) : ?>
            <li id="inventory"><a href="inventory"><i class="fa fa-list-alt"></i>Tồn kho</a></li>
        <?php endif; ?>
        <?php if (in_array(11, $user['group_permission'])) : ?>
            <li id="setting"><a href="setting"><i class="fa fa-cogs"></i>Thiết lập</a></li>
        <?php endif; ?>
    </ul>
</div>