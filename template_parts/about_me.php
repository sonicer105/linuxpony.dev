<?php if (!defined('LP_VER')) die; ?>
<section id="about">
    <h1>About Me</h1>
    <div class="summary-card">
        <img src="/img/cipherwave_commission_1.<?php echo ($webp)? 'webp' : 'png' ?>" class="profile" alt="Profile picture of LinuxPony">
        <div class="summary-text">
            <p>
                <span class="bigger">Hi, I'm LinuxPony!</span> I'm a full stack developer from Canada employed writing
                code. I work on a number of code projects on the side like maintaining the Vanhoover Pony Expo website
                among other things. I'm also a tech enthusiast, brony, furry, and convention volunteer! I love meeting
                new friends and hanging out so don't hesitate to say hi!
            </p>
            <?php if($nsfw) { ?>
            <h2>Get to know my interests</h2>
            <ul>
                <li><a href="https://www.f-list.net/c/linuxpony/" rel="noopener nofollow" target="_blank">My F-list</a></li>
                <li><a href="https://onceeternal.github.io/KinkList/hypnosis/v1.html#nW-yAg70eJ960P%5Eps1cU.Yjci74qxPM-auj1m9vbfb6dbf%5ErnsSwjWvWf_KD0GLGuSxvtWIleGdOBqVkaaabDF3f" rel="noopener nofollow" target="_blank">Hypno Kink List</a></li>
                <li><a href="https://bdsmtest.org/r/zXvrZcLQ" rel="noopener nofollow" target="_blank">BDSM Test Results</a></li>
            </ul>
            <?php } ?>
            <h2>Connect with me</h2>
            <div class="socials">
                <a href="https://twitter.com/LinuxPony" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fab fa-twitter fa-stack-1x"></span>
                    </span>
                    <span class="sr-only">Twitter</span>
                </a>
                <?php if($nsfw) { ?>
                <a href="https://twitter.com/LinuxPonyAD" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fab fa-twitter fa-stack-1x"></span>
                        <span class="fa-stack-1x stack-text-ad">AD</span>
                    </span>
                    <span class="sr-only">Twitter (After Dark Account)</span>
                </a>
                <?php } ?>
                <a href="https://discord.com/users/174641580878069760" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fab fa-discord fa-stack-1x"></span>
                    </span>
                    <span class="sr-only">Discord</span>
                </a>
                <a href="https://derpibooru.org/profiles/LinuxPony" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <?php include "img/derpibooru.svg" ?>
                    </span>
                    <span class="sr-only">Derpibooru</span>
                </a>
                <?php if($nsfw) { ?>
                <a href="https://www.furaffinity.net/user/linuxpony/" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fas fa-paw fa-stack-1x"></span>
                    </span>
                    <span class="sr-only">Fur Affinity</span>
                </a>
                <?php } ?>
                <?php if($nsfw) { ?>
                <a href="https://fetlife.com/users/8259997" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <?php include "img/fetlife.svg" ?>
                    </span>
                    <span class="sr-only">FetLife</span>
                </a>
                <?php } ?>
                <a href="https://github.com/sonicer105" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fab fa-github fa-stack-1x"></span>
                    </span>
                    <span class="sr-only">GitHub</span>
                </a>
                <a href="https://steamcommunity.com/id/sonicer105/" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fab fa-steam fa-stack-1x"></span>
                    </span>
                    <span class="sr-only">Steam</span>
                </a>
                <a href="https://www.reddit.com/user/sonicer105" rel="noopener nofollow" target="_blank">
                    <span class="fa-stack" aria-hidden="true">
                        <span class="fas fa-circle fa-stack-2x fa-inverse"></span>
                        <span class="fab fa-reddit fa-stack-1x"></span>
                    </span>
                    <span class="sr-only">Reddit</span>
                </a>
            </div>
        </div>
    </div>
</section>