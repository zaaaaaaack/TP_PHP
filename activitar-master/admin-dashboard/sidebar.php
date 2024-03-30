<?php

?>

<aside id="sidebar">
            <input type="checkbox" name="" id="toggler">
            <label for="toggler" class="toggle-btn">
                <i class="lni lni-grid-alt"></i>
                <span>esm</span>
            </label>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="<?php echo $firstlink?>" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Inbox</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo $secondlink?>" class="sidebar-link">
                        <i class="lni lni-customer"></i>
                        <span>users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo $thirdtlink?>" class="sidebar-link">
                        <i class="lni lni-cart-full"></i>
                        <span>Stock</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="<?php echo $lasttlink?>" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>