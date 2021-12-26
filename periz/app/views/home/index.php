<article style="background-image: url('<?= BASEURL; ?>/img/<?= $data['home']['image'] ?>.jpg'); background-size:cover;">
    <div class="maincontainhome">
        <div class="textmiddle">
            <h2 class="displayhome"><?= $data['home']['text'] ?></h2>
            <p class="homesubtext"><?= $data['home']['sub_text'] ?></p>
            <a id="btngetstarted" href="<?= BASEURL; ?>/<?= $data['home']['head_link'] ?>"><button>Get Started</button></a>
        </div>
    </div>
</article>