<div style="background-color: whitesmoke;border-radius: 12px;padding:2px">
    <nav>
        <ul style="list-style-type:none;padding-inline-start:0px;margin:5px;">


        <a style="text-decoration:none" href="#">
        <li style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#person"></use>
            </svg><span><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Friends</span>
        </li>
        </a>

        <a style="text-decoration:none" href="?app=user&action=work">
        <li style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#video-player"></use>
            </svg><span><i class="fas fa-briefcase"></i>&nbsp; Work</span>
        </li>
        </a>

        <a style="text-decoration:none" href="#">
        <li style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#speech-bubble"></use>
            </svg><span><i class="fas fa-comment-alt"></i>&nbsp; Message</span>
        </li>
        </a>

        <a style="text-decoration:none" href="?app=user&action=community">
        <li style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#paper-airplane"></use>
            </svg><span><i class="fas fa-globe"></i>&nbsp; Community</span>
        </li>
        </a>

        <a style="text-decoration:none" href="#">
        <li style="padding-bottom: 8px;">
            <svg style="height:32px;width: 32px;">
                <use  xlink:href="#paper-airplane"></use>
            </svg><span><i class="fas fa-envelope"></i>&nbsp; Following</span>
        </li>
        </a>

        <?php if ($level == "admin") {?>
            <a style="text-decoration:none" href="#">
            <li style="padding-bottom: 8px;">
                <svg style="height:32px;width: 32px;">
                    <use  xlink:href="#paper-airplane"></use>
                </svg><span><i class="fas fa-user-cog"></i>&nbsp; User management</span>
            </li>
            </a>
        <?php }?>

        </ul>
    </nav>
</div>