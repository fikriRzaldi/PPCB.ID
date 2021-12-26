<aside>
    <h4>FREQUENTLY ASKED QUESTIONS</h4>
    <ul class="faq">
        <?php foreach ($data['aside'] as $aside) : ?>
            <li class="pertanyaan"> <?= $aside['aside_faq']; ?>
                <ul class="jawab">
                    <li class="jawaban"><?= $aside['faq_answer']; ?></li>
                </ul>
            </li>
        <?php endforeach ?>
    </ul>
</aside>
</div>