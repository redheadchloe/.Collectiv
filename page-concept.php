<?php get_header(); ?>

<div class="concept-container my-10">
    <div class="concept-item">
        <div class="concept-title">
            <span>01.</span>
            <h2>建築物</h2>
        </div>
        <div class="concept-img">
            <p class="my-2">建築は必ずある敷地に建ち、道路に接しています。その周辺は住宅街であったり、商店街であったり、のどかな自然の中であったりと、場所によって性格や人の流れが全く異なります。建物が建つ「敷地」「道路」「まち」の絶対的な都市構造を解釈し直して再編集することで、人の動きやまちの性格づくりに寄与することに興味を持っていただけます。</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept-arch.jpeg" alt="">
        </div>
    </div>
    <div class="concept-item">
        <div class="concept-title">
            <span>02.</span>
            <h2>街</h2>
        </div>
        <div class="concept-img grid my-2">
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept-st.jpeg" alt="">
            <p>常に「経路と経験」を大切にしています。街の建築はそれを象徴するようなものだと思います。建築というものは建物の中だけで完結するのではなく、商店街を歩き、路地を抜けて、建物に足を踏み入れるといった、外から続く体験がシームレスに家の中までつながっている方が面白いと思います。</p>
        </div>
    </div>
    <div class="concept-item">
        <div class="concept-title flex">
            <span>03.</span>
            <h2>人</h2>
        </div>
        <div class="concept-img grid my-2">
            <p>テーブルを囲んで複数人で作業をする人もいれば、倉庫の片隅で一人で黙々と作業をする人がいたり、アーティストでもあるスタッフがその中に混じって絵を描いていたり。そういう状況を目の当たりにする中で、「ちがいを認め、ちがいを大切にする」というのは、それぞれのために特別な部屋をつくるのではなく、違いがある人が一緒の場所にいてもいいんだと思えるような空間をつくることなのではないかと考えるようになりました。</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/concept-ppl.jpeg" alt="">
        </div>
    </div>


    <svg viewBox="0 0 500 500">
        <path id="floating-text" fill="#fff" d="M33.5 39.5v429h437v-429h-431" />
        <text y="40" font-size="30">
            <textPath id="text-path" class="text" href="#floating-text" startOffset="100">
                <?php bloginfo('description'); ?>
            </textPath>
        </text>
    </svg>


</div>
<?php get_footer(); ?>
<script>
    var textPath = document.querySelector('#text-path');
    updateTextPathOffset = (offset) => {
        textPath.setAttribute('startOffset', offset);
    }
    onScroll = () => {
        requestAnimationFrame(() => {
            updateTextPathOffset(window.scrollY * 1);
        })
    }

    window.addEventListener('scroll', onScroll)

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            entry.target.classList.toggle('animate', entry.isIntersecting);
        })
    })

    const titles = document.querySelectorAll('.concept-title');
    console.log(titles);
    titles.forEach(title => observer.observe(title));
</script>