<div style="background-color: whitesmoke;border-radius: 12px;padding:2px">
    <nav>
        <ul style="list-style-type:none;padding-inline-start:0px;margin:5px;">

<!-- =========================================================================================================================Everyone -->

        <a style="text-decoration:none" href="#">
        <li class="select-menu"  style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#person"></use>
            </svg><span><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Friends</span>
        </li>
        </a>

        <a style="text-decoration:none" href="?app=user&action=work">
        <li class="select-menu"  style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#video-player"></use>
            </svg><span><i class="fas fa-briefcase"></i>&nbsp; Work</span>
        </li>
        </a>

        <a style="text-decoration:none" href="#">
        <li class="select-menu"  style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#speech-bubble"></use>
            </svg><span><i class="fas fa-comment-alt"></i>&nbsp; Message</span>
        </li>
        </a>

        <a style="text-decoration:none" href="?app=user&action=community">
        <li class="select-menu"  style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#paper-airplane"></use>
            </svg><span><i class="fas fa-globe"></i>&nbsp; Community</span>
        </li>
        </a>

        <a style="text-decoration:none" href="#">
        <li class="select-menu"  style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#paper-airplane"></use>
            </svg><span><i class="fas fa-envelope"></i>&nbsp; Following</span>
        </li>
        </a>

        <a style="text-decoration:none" href="?app=user&action=public_chat">
        <li class="select-menu"  style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#paper-airplane"></use>
            </svg><span><i class="fas fa-chalkboard"></i>&nbsp; Discussion board</span>
        </li>
        </a>
        </ul>
    </nav>
</div>

<!-- =========================================================================================================================Staff only -->
<?php if ($level == "admin") {?>
<br>
<br>
<p style="color:red;text-align:center;">Administrator</p>
<div style="background-color: whitesmoke;border-radius: 12px;padding:2px">
    <nav>
    <ul style="list-style-type:none;padding-inline-start:0px;margin:5px;">

            <a style="text-decoration:none" href="?app=user&action=user_management">
            <li class="select-menu"  style="padding-bottom: 8px;">
                <svg style="height:32px;width: 32px;">
                    <use  xlink:href="#paper-airplane"></use>
                </svg><span><i class="fas fa-user-cog"></i>&nbsp; User management</span>
            </li>
            </a>

            <a style="text-decoration:none" href="#">
            <li class="select-menu"  style="padding-bottom: 8px;">
                <svg style="height:32px;width: 32px;">
                    <use  xlink:href="#paper-airplane"></use>
                </svg><span><i class="fas fa-bullhorn"></i>&nbsp; Public relations</span>
            </li>
            </a>

        </ul>
    </nav>
</div>

<?php }?>