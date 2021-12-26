<div>
    <nav>
        <ul>
            <button class="bgnavmain"><a class="navmain" href="<?= BASEURL ?>/<?= $data['nav']['0']['nav_link'] ?>/"><?= $data['nav']['0']['nav_main'] ?></a></button>
            <button class="drpnavmain"><a class="navmain" href="<?= $data['nav']['1']['nav_link'] ?>"><?= $data['nav']['1']['nav_main'] ?></a></button>
            <div class="containerdrop">
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['0']['child_link'] ?>"><?= $data['child']['0']['child_name'] ?></a>
                </li>
            </div>
            <button class="drpnavmain"><a class="navmain" href="<?= $data['nav']['2']['nav_link'] ?>"><?= $data['nav']['2']['nav_main'] ?></a></button>
            <div class="containerdrop">
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['1']['child_link'] ?>"><?= $data['child']['1']['child_name'] ?></a></li>
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['2']['child_link'] ?>"><?= $data['child']['2']['child_name'] ?></a></li>
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/header/logout">LOGOUT</a></li>
            </div>
            <li class="drpnavmain"><a class="navmain" href="<?= $data['nav']['3']['nav_link'] ?>"><?= $data['nav']['3']['nav_main'] ?></a></li>
            <div class="containerdrop">
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/home/<?= $data['child']['3']['child_link'] ?>"><?= $data['child']['3']['child_name'] ?></a></li>
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['4']['child_link'] ?>"><?= $data['child']['4']['child_name'] ?></a></li>
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['5']['child_link'] ?>"><?= $data['child']['5']['child_name'] ?></a></li>
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['6']['child_link'] ?>"><?= $data['child']['6']['child_name'] ?></a></li>
                <li class="bgnavchild"><a class="navchild" href="<?= BASEURL ?>/<?= $data['child']['7']['child_link'] ?>"><?= $data['child']['7']['child_name'] ?></a></li>
            </div>
        </ul>
    </nav>