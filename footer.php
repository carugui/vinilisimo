    <!-- PREFOOTER -->
    <?php if ( !is_woocommerce () ) : ?>
        <section class="pre-footer">
            <h2>¿Estás preparado?</h2>
            <p class="text--handwritten">Empieza a personalizar tu vinilo, ¡cuanto antes lo pidas, antes te llegará!</p>
            <a class="btn" href="<?php echo home_url( '/producto/vinilo/'); ?>">Haz tu vinilo</a>
        </section>
    <?php endif; ?>


    <!-- FOOTER -->

    <footer>

        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="7" fill="" />
            </g>
            </svg>
        </div>

        <div class="main-footer">

            <div class="main-footer__upper">

                <div class="main-footer__nav">
                    
                    <?php
                    
                        wp_nav_menu ( array
                        (
                            'theme_location' => 'footer-menu-left',
                            'container' => false
                        ));
                        
                    ?>
                    
                </div>

                <div class="main-footer__fine-print">
                    <?php
                        
                        wp_nav_menu ( array
                        (
                            'theme_location' => 'footer-menu-right',
                            'container' => false
                        ));
                        
                    ?>
                </div>

                <div class="main-footer__social-media">
                    <ul>
                        <li><a href="tiktok.com">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.953 0C11.6421 0 12.3312 0 13.0203 0C13.1473 0.0362683 13.2561 0.0725367 13.383 0.0906709C20.274 0.834172 25.1702 7.56195 23.7558 14.3441C22.6133 19.8025 17.9528 23.8102 12.5126 23.9915C6.81845 24.1729 1.90409 20.5823 0.417086 15.142C0.235744 14.4529 0.126939 13.7457 0 13.0385C0 12.3494 0 11.6603 0 10.9712C0.0362684 10.8442 0.0725367 10.6992 0.0906709 10.5722C0.816038 5.69413 3.48176 2.37558 8.08784 0.670964C8.99455 0.326415 9.99193 0.21761 10.953 0ZM10.8624 10.4634C10.808 10.4453 10.7536 10.409 10.7173 10.409C7.72516 10.0282 5.27705 12.9115 6.14749 15.813C6.74591 17.8078 8.7044 19.0772 10.7717 18.8233C12.8934 18.5694 14.4892 16.8466 14.5255 14.7068C14.5617 13.3649 14.5255 12.023 14.5255 10.681C14.5255 10.3546 14.5255 10.0463 14.5255 9.64738C15.6135 10.3909 16.7016 10.8261 17.971 10.7898C17.971 10.0463 17.971 9.3391 17.971 8.61373C15.8855 8.37799 14.7431 7.2174 14.4892 5.18637C13.7457 5.18637 13.0203 5.18637 12.2768 5.18637C12.2768 5.42212 12.2768 5.62159 12.2768 5.8392C12.2768 8.79507 12.2768 11.7509 12.2587 14.6887C12.2587 15.7586 11.3883 16.5746 10.3365 16.6109C9.26656 16.6472 8.34172 15.8674 8.23292 14.8338C8.12411 13.8001 8.81321 12.839 9.84686 12.6395C10.1733 12.5851 10.5178 12.6214 10.8624 12.6214C10.8624 11.8779 10.8624 11.1707 10.8624 10.4634Z" fill=""/>
                            </svg>
                        </a></li>
                        <li><a href="instagram.com">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 13.0275C0 12.3475 0 11.651 0 10.971C0.0331688 10.7389 0.0829221 10.5067 0.116091 10.2911C1.12774 3.57439 7.31373 -0.919988 14.0138 0.174583C19.4867 1.07014 23.666 5.74695 23.9811 11.3193C24.2962 16.8917 20.6476 22.0163 15.3074 23.5089C14.5611 23.7245 13.7816 23.824 13.0188 23.9898C12.3388 23.9898 11.6423 23.9898 10.9623 23.9898C10.8628 23.9566 10.7633 23.9235 10.6472 23.9069C5.77138 23.343 1.75795 19.9432 0.447779 15.2166C0.248766 14.5035 0.14926 13.7572 0 13.0275ZM18.8067 11.9993C18.8233 11.9993 18.8233 11.9993 18.8399 11.9993C18.8399 11.0042 18.8731 9.99256 18.8399 8.99749C18.757 6.87469 17.5795 5.41526 15.4733 5.24941C13.2012 5.06699 10.8794 5.08357 8.60731 5.23283C6.55084 5.38209 5.37335 6.59275 5.22409 8.63264C5.07483 10.8715 5.07483 13.127 5.22409 15.3659C5.35677 17.4058 6.58401 18.633 8.6239 18.7657C10.8628 18.915 13.1183 18.915 15.3572 18.7657C17.4136 18.6165 18.5745 17.3726 18.7901 15.3162C18.9062 14.2216 18.8067 13.1104 18.8067 11.9993ZM12.0237 6.31082C13.1514 6.31082 14.2792 6.37715 15.3903 6.47666C16.6342 6.57617 17.4468 7.37222 17.5297 8.63264C17.6458 10.4238 17.6127 12.2149 17.6292 14.006C17.6292 14.4869 17.5961 14.9679 17.5297 15.4488C17.3639 16.5932 16.601 17.3892 15.4401 17.5219C14.4616 17.6214 13.4831 17.638 12.5046 17.638C11.2276 17.638 9.95065 17.638 8.67365 17.5385C7.38006 17.4224 6.56743 16.6429 6.48451 15.3659C6.36842 13.5748 6.40158 11.7837 6.385 9.99256C6.385 9.51161 6.41817 9.03066 6.48451 8.54971C6.65035 7.3888 7.41323 6.60934 8.57414 6.49325C9.70188 6.36057 10.8628 6.36057 12.0237 6.31082C12.0237 6.36057 12.0237 6.26106 12.0237 6.31082ZM11.9905 15.5318C13.9309 15.5318 15.5396 13.9231 15.5396 11.9827C15.5396 10.0589 13.9475 8.46679 12.0237 8.45021C10.0833 8.43362 8.45805 10.0423 8.45805 11.9827C8.44147 13.9231 10.0502 15.5318 11.9905 15.5318ZM14.8596 8.30095C14.8431 8.74873 15.2245 9.13017 15.6723 9.13017C16.1035 9.13017 16.4683 8.7819 16.5015 8.3507C16.5181 7.90292 16.1532 7.50489 15.7054 7.48831C15.2411 7.48831 14.8596 7.83658 14.8596 8.30095ZM9.70188 11.9827C9.70188 13.2597 10.7135 14.2713 11.9739 14.2879C13.2509 14.2879 14.2626 13.2929 14.2792 12.0159C14.2792 10.7389 13.2841 9.72721 12.0071 9.71062C10.7301 9.69404 9.71847 10.7057 9.70188 11.9827Z" fill=""/>
                            </svg>  
                        </a></li>
                        <li><a href="facebook.com">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.3053 0C11.7821 0 12.2452 0 12.7219 0C12.8581 0.0408627 12.9943 0.108967 13.1442 0.108967C14.3837 0.163451 15.555 0.544835 16.6856 1.00795C17.9251 1.52554 19.0556 2.27469 20.0636 3.18729C21.1941 4.2361 22.0931 5.44835 22.7605 6.83768C23.4688 8.30874 23.8638 9.86152 23.9183 11.5096C23.9183 11.5914 23.9864 11.6595 24.0136 11.7412C24.0136 11.9319 24.0136 12.1226 24.0136 12.2997C23.9728 12.4495 23.9046 12.6129 23.9046 12.7628C23.8638 14.6288 23.2917 16.3451 22.3791 17.9387C21.6027 19.3144 20.5539 20.4722 19.3008 21.4529C17.7344 22.6924 15.9501 23.4552 14.0159 23.8093C12.0953 24.1634 10.1748 24 8.29512 23.3871C5.48921 22.4745 3.33711 20.7446 1.77071 18.2656C0.939838 16.958 0.395003 15.5414 0.163448 14.0159C-0.0408654 12.8036 -0.0544863 11.5641 0.122585 10.311C0.340519 8.77185 0.830871 7.31442 1.62088 5.97957C2.73779 4.11351 4.22247 2.60159 6.15664 1.55278C7.40976 0.871737 8.71736 0.381385 10.1339 0.204313C10.5289 0.163451 10.9239 0.0681044 11.3053 0ZM8.94892 9.73893C8.94892 10.5426 8.94892 11.2781 8.94892 12.0545C9.27582 12.0545 9.57548 12.0817 9.86152 12.0545C10.3246 12 10.4336 12.1907 10.4336 12.6266C10.4064 14.2883 10.42 15.9501 10.4336 17.6118C10.4336 17.7616 10.5426 18.0477 10.6243 18.0477C11.319 18.0749 12.0136 18.0613 12.7764 18.0613C12.7764 16.0182 12.7764 14.0568 12.7764 12.0545C13.3076 12.0545 13.798 12.0681 14.2747 12.0409C14.4109 12.0272 14.6288 11.8774 14.6561 11.7684C14.7923 11.1146 14.874 10.4608 14.9966 9.72531C14.2202 9.72531 13.5119 9.72531 12.8036 9.72531C12.6674 8.58116 12.899 8.30874 13.9614 8.30874C14.3019 8.30874 14.6424 8.30874 14.9966 8.30874C14.9966 7.50511 14.9966 6.75596 14.9966 5.88422C14.084 5.93871 13.1986 5.95233 12.3269 6.07491C11.2508 6.22474 10.6652 6.93303 10.4745 7.98184C10.42 8.2815 10.4336 8.6084 10.4336 8.92168C10.42 9.8479 10.5426 9.72531 9.5891 9.73893C9.38479 9.73893 9.18047 9.73893 8.94892 9.73893Z" fill=""/>
                            </svg>
                        </a></li>
                    </ul>
                </div>
                
            </div>

            <div class="main-footer__lower" >
                
                <a href="index.html">
                    <svg width="132" height="36" viewBox="0 0 132 36" fill="white" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.745 15.4033C18.9087 16.8763 18.9632 18.4585 18.9087 20.0952C18.9087 21.7319 18.7995 23.3686 18.6359 25.0598C18.4722 26.7511 18.1994 28.3878 17.8721 29.9699C17.6539 31.0611 17.272 31.9885 16.8355 32.7523C16.399 33.5161 15.7444 34.0071 14.8715 34.2254C13.9986 34.4436 13.2348 34.3345 12.5255 33.8435C11.8163 33.3525 11.2707 32.5887 10.8343 31.4975C10.4524 30.4609 10.0159 29.4789 9.5249 28.4423C9.03389 27.4058 8.54288 26.4238 8.05187 25.4963C7.5063 24.5688 7.01529 23.6414 6.46972 22.823C5.92416 22.0047 5.37859 21.2954 4.83302 20.6953C4.50568 20.3134 4.06923 20.0406 3.57822 19.8224C3.08721 19.6042 2.5962 19.4405 2.10519 19.2223C1.61418 19.0586 1.17772 18.7858 0.795825 18.513C0.413927 18.2402 0.141144 17.8038 0.0320304 17.2582C-0.077083 16.8763 -0.077083 16.4944 0.0320304 16.058C0.141144 15.6215 0.304814 15.2942 0.523041 14.9123C0.741268 14.5849 1.06861 14.2576 1.45051 13.9848C1.8324 13.712 2.26886 13.5484 2.75987 13.3847C4.34201 13.0028 5.8696 13.221 7.23352 14.0939C8.65199 14.9668 9.9068 16.3853 11.0525 18.3494C12.1982 20.4225 13.1256 22.3866 13.7803 24.2415C14.435 26.0964 14.926 27.7877 15.3625 29.3698C15.7444 28.4969 16.0717 27.3512 16.399 25.8782C16.7264 24.4052 16.9992 22.8776 17.1628 21.2409C17.3265 19.6042 17.4356 17.9129 17.3811 16.2216C17.3265 14.5304 17.1628 13.0028 16.8355 11.6934C16.7264 11.3661 16.6718 11.0388 16.5627 10.7114C16.4536 10.3841 16.399 10.1113 16.3445 9.89306C16.2899 9.67484 16.2899 9.45661 16.2899 9.29294C16.2899 9.12927 16.399 9.02015 16.5082 9.02015C16.7264 8.9656 16.9992 9.12927 17.3265 9.56572C17.6539 10.0022 17.8721 10.6023 18.0903 11.3661C18.4176 12.6209 18.6359 13.9303 18.745 15.4033ZM23.4369 10.3295C23.7642 10.0022 24.037 9.62028 24.2007 9.23838C24.3643 8.85648 24.4734 8.42003 24.4734 8.03813C24.4734 7.60168 24.3643 7.21978 24.1461 6.83789C23.7642 6.12865 23.2732 5.74675 22.6185 5.69219C21.9638 5.63764 21.3092 5.74675 20.709 6.12865C20.3271 6.34687 19.9998 6.61966 19.727 6.947C19.4542 7.27434 19.236 7.65624 19.0723 8.09269C18.9087 8.47459 18.8541 8.91104 18.8541 9.29294C18.8541 9.72939 18.9632 10.1113 19.1269 10.4386C19.3997 10.9296 19.8361 11.257 20.4362 11.4752C21.0364 11.6934 21.6365 11.5843 22.2912 11.257C22.7276 10.9842 23.1095 10.6569 23.4369 10.3295ZM52.3519 5.20118C52.8429 5.25574 53.334 5.20118 53.825 5.14663C54.2614 5.03751 54.6979 4.87384 55.0798 4.65562C55.4617 4.43739 55.7344 4.16461 55.9527 3.78271C56.1709 3.45537 56.3346 3.01891 56.3346 2.58246C56.3891 1.81867 56.1709 1.21854 55.6799 0.782089C55.1889 0.345635 54.5888 0.127408 53.825 0.0728512C53.4431 0.0182945 53.0066 0.0182945 52.5702 0.181965C52.1337 0.291078 51.7518 0.509305 51.4245 0.727532C51.0971 1.00032 50.7698 1.2731 50.5516 1.60044C50.3333 1.92778 50.1697 2.30968 50.1697 2.69157C50.1151 3.23714 50.2788 3.78271 50.6607 4.27372C51.0426 4.81929 51.6427 5.09207 52.3519 5.20118ZM72.647 26.0964C72.9744 25.9327 73.1926 25.8236 73.3017 25.6054C73.3563 25.5508 73.3563 25.4417 73.3563 25.3326C73.3563 25.2235 73.3017 25.1689 73.1926 25.1144C73.0289 25.0053 72.8653 25.0598 72.647 25.1689C72.4288 25.2781 72.1015 25.3872 71.7196 25.4963C71.0649 25.66 70.4648 25.7691 69.9192 25.7145C69.3736 25.66 68.9372 25.5508 68.5553 25.3326C68.1188 25.1144 67.9006 24.787 67.7915 24.3506C67.6824 23.9687 67.7915 23.4777 68.1188 22.9321C68.3916 22.4957 68.719 22.0592 69.1554 21.5682C69.5919 21.0772 70.0283 20.6407 70.5193 20.1497C71.0103 19.6587 71.4468 19.1677 71.8832 18.6767C72.3197 18.1857 72.647 17.7492 72.9198 17.2582C73.1926 16.7672 73.1926 16.3308 72.9744 15.7852C72.7562 15.2942 72.3743 14.9123 71.8832 14.6395C71.5013 14.4213 71.1195 14.3122 70.683 14.3122C70.3011 14.3122 69.9192 14.4213 69.5373 14.5304C69.1554 14.6941 68.8281 14.8577 68.5553 15.1305C68.2279 15.3487 68.0097 15.6215 67.7915 15.8397C67.4096 16.2762 67.0277 16.7127 66.7549 17.1491C66.4276 17.531 66.2093 17.9675 65.9366 18.3494C65.7183 18.7313 65.4455 19.1131 65.2273 19.495C65.0637 19.7133 64.9545 19.9861 64.7909 20.2588C64.5181 20.4225 64.1362 20.5862 63.6997 20.7499C63.2633 20.9135 62.7723 21.0772 62.2813 21.1317C61.7357 21.2409 61.2447 21.1863 60.6991 21.0226C60.2627 20.859 60.0444 20.6407 60.0444 20.3134C59.9899 19.9861 60.099 19.5496 60.2627 19.0586C60.4809 18.4039 60.8082 17.6401 61.2992 16.7672C61.7357 15.8943 62.2813 15.0214 62.8814 14.0394C63.4815 13.1119 64.0816 12.1299 64.6818 11.1479C65.3364 10.1658 65.882 9.23838 66.4821 8.42003C67.0277 7.54712 67.5187 6.78333 67.9552 6.07409C68.3916 5.36485 68.6644 4.81929 68.7735 4.38283C69.1008 3.45537 69.1554 2.74613 69.0463 2.25512C68.9372 1.76411 68.5007 1.38221 67.7369 1.10943C67.355 1.00032 66.9186 0.945759 66.4276 1.05487C65.9366 1.10943 65.4455 1.32766 64.9545 1.54588C64.4635 1.81867 64.0271 2.14601 63.5906 2.5279C63.1542 2.9098 62.7723 3.34625 62.4449 3.89182C61.8448 4.87384 61.2447 5.91042 60.6991 7.00156C60.1535 8.09269 59.608 9.23838 59.0624 10.4386C58.5168 11.5843 58.0804 12.7846 57.5894 13.9848C57.1529 15.1851 56.771 16.2762 56.3891 17.3128C56.3891 17.3128 56.3891 17.3128 56.3891 17.3673C56.28 17.4764 56.1163 17.6401 55.9527 17.7492C55.4617 18.1857 54.9161 18.513 54.4251 18.6767C53.9341 18.8949 53.4431 18.9495 53.0066 18.8949C52.5156 18.8404 52.1883 18.6767 51.9155 18.3494C51.6427 18.022 51.5881 17.531 51.6427 16.8763C51.6973 16.3853 51.8064 15.8397 51.97 15.2396C52.1337 14.6395 52.3519 13.9848 52.5702 13.3847C52.7884 12.73 53.0066 12.1299 53.1703 11.4752C53.334 10.9296 53.4431 10.3841 53.4976 9.83851C53.5522 9.29294 53.334 8.85648 52.9521 8.52914C52.5156 8.2018 52.0246 7.98358 51.479 7.92902C51.0426 7.87446 50.6061 7.92902 50.2788 8.14725C49.8969 8.31092 49.6241 8.52914 49.3513 8.85649C49.0785 9.12927 48.8603 9.45661 48.6966 9.83851C48.533 10.1658 48.4238 10.4932 48.3147 10.8205C48.042 11.8025 47.8783 12.73 47.7692 13.6575C47.6601 14.4758 47.5509 15.2942 47.4964 16.058C47.4418 16.1671 47.3327 16.2762 47.2782 16.3853C47.0599 16.7127 46.8417 16.9854 46.6235 17.3128C46.4053 17.5856 46.187 17.7492 45.9688 17.8038C45.696 17.8583 45.4232 17.8038 45.205 17.5856C44.9868 17.3673 44.8231 17.0946 44.6049 16.7127C44.4412 16.3308 44.2775 15.9489 44.1684 15.567C44.0593 15.1305 43.9502 14.7486 43.8956 14.4758C43.732 13.8757 43.5683 13.2756 43.2955 12.73C43.0227 12.1299 42.75 11.6389 42.4226 11.2024C42.0953 10.766 41.7134 10.4386 41.3315 10.2204C40.9496 10.0022 40.5131 9.94762 40.0767 10.0567C39.3129 10.2204 38.7128 10.4932 38.2217 10.9296C37.7853 11.3661 37.2397 11.9662 36.6942 12.7846C36.6396 12.2936 36.585 11.8571 36.5305 11.3661C36.4759 10.9296 36.3668 10.4386 36.3123 10.0022C36.2031 9.56572 36.0395 9.18382 35.7121 8.91104C35.3848 8.5837 34.9483 8.52914 34.4028 8.63826C33.7481 8.74737 33.2025 9.07471 32.7661 9.62028C32.3296 10.1113 32.1114 10.766 32.0568 11.5298C32.0023 12.1844 32.0023 13.0574 32.0023 14.0394C32.0568 15.0214 32.0568 16.058 32.1659 17.04C32.2205 18.022 32.3296 18.8949 32.3842 19.7133C32.3842 19.7678 32.3296 19.8769 32.3296 19.9315C32.1659 20.5862 31.8932 21.1317 31.5658 21.5682C31.2385 22.0047 30.9111 22.332 30.5292 22.5502C30.0928 22.7684 29.7109 22.823 29.329 22.7139C28.9471 22.6048 28.5652 22.2229 28.2924 21.6773C28.0742 21.2409 27.856 20.6953 27.6377 20.0952C27.4741 19.495 27.2558 18.8404 27.0922 18.1857C26.9285 17.531 26.7648 16.8763 26.5466 16.2762C26.3829 15.6761 26.1647 15.1305 25.8919 14.6395C25.6191 14.1485 25.2372 13.9303 24.6917 13.8757C24.1461 13.8211 23.6005 13.9303 23.1095 14.203C22.7276 14.4213 22.4003 14.6941 22.1821 15.0214C21.9638 15.3487 21.8547 15.7306 21.8002 16.1125C21.7456 16.4944 21.7456 16.8763 21.8002 17.2582C21.8547 17.6401 21.9093 17.9675 22.0184 18.2948C22.3457 19.2768 22.7276 20.1497 23.1095 20.9681C23.4914 21.7864 23.8733 22.5502 24.3098 23.2595C24.6371 23.8596 25.019 24.3506 25.4555 24.787C25.8919 25.2235 26.3829 25.5508 26.8739 25.7145C27.3649 25.9327 27.9105 25.9873 28.5106 25.9873C29.1108 25.9873 29.7109 25.7691 30.3656 25.3872C30.9111 25.0598 31.3476 24.7325 31.6749 24.2415C32.0023 23.805 32.2751 23.314 32.4933 22.7685C32.6024 22.5502 32.657 22.2774 32.7661 22.0047C32.8206 22.1683 32.8752 22.332 32.9297 22.4957C33.0389 22.7685 33.148 22.9867 33.3116 23.1503C33.4753 23.3686 33.639 23.4777 33.8572 23.5322C34.0754 23.5868 34.3482 23.6414 34.6756 23.5322C35.0574 23.4777 35.3848 23.314 35.6576 23.0958C35.9304 22.8776 36.1486 22.6048 36.3123 22.332C36.4759 22.0592 36.6396 21.7319 36.7487 21.35C36.8578 21.0226 36.9669 20.6407 37.0215 20.3134C37.1306 19.7678 37.2397 19.1677 37.4034 18.6221C37.5125 18.022 37.6762 17.4764 37.8398 16.9854C38.0035 16.4944 38.2217 16.058 38.4945 15.7306C38.7128 15.4033 39.0401 15.1851 39.3674 15.1305C39.6402 15.076 39.9676 15.1305 40.2949 15.3487C40.6222 15.567 40.895 16.0034 41.0587 16.6581C41.1678 17.0946 41.386 17.531 41.6043 17.9675C41.8225 18.4039 42.0953 18.8404 42.4226 19.1677C42.75 19.495 43.1318 19.7678 43.6229 19.9315C44.0593 20.0952 44.6049 20.0952 45.205 19.9861C45.7506 19.8769 46.2416 19.6042 46.678 19.1677C47.0599 18.8404 47.3327 18.4585 47.6055 18.022V18.0766C47.7146 18.6767 47.9328 19.2223 48.2602 19.6587C48.5875 20.0952 48.9694 20.4771 49.4604 20.8044C49.9514 21.0772 50.6061 21.2954 51.3154 21.35C51.9155 21.4045 52.5156 21.35 53.0612 21.1317C53.6067 20.9681 54.0977 20.6953 54.5888 20.368C55.0798 20.0406 55.5162 19.6587 55.8981 19.2768C56.0072 19.1677 56.0618 19.1131 56.1709 19.004C56.1163 19.7678 56.1709 20.4225 56.4437 21.0772C56.8801 22.1138 57.6439 22.823 58.7351 23.2049C59.4989 23.4777 60.2627 23.4777 61.0265 23.314C61.8448 23.1503 62.554 22.8776 63.2087 22.4957C63.5906 22.2774 63.9725 22.0592 64.2453 21.841C64.1907 21.9501 64.1362 22.0592 64.1362 22.2229C64.0271 22.7685 63.9725 23.314 64.0816 23.8596C64.1362 24.4052 64.3544 24.9507 64.6818 25.4417C65.0091 25.9327 65.5001 26.3692 66.1548 26.7511C66.7004 27.0784 67.2459 27.2421 67.7915 27.2967C68.3371 27.3512 68.9372 27.3512 69.4827 27.2421C70.0283 27.133 70.5739 26.9693 71.174 26.8056C71.5559 26.5329 72.1015 26.3146 72.647 26.0964ZM73.5199 12.5118C73.6291 12.5663 73.8473 12.5663 74.0655 12.5118C74.2837 12.4027 74.4474 12.3481 74.5565 12.2936C75.0475 12.1299 75.5385 11.9117 76.1387 11.6389C76.6842 11.3661 77.2844 11.1479 77.7754 10.8205C78.3209 10.5477 78.7574 10.275 79.1938 10.0022C79.6303 9.72939 79.9031 9.45661 80.0668 9.18382C80.2304 8.91104 80.285 8.5837 80.2304 8.31092C80.1759 7.98358 79.9576 7.76535 79.5757 7.54712C79.0302 7.21978 78.43 7.21978 77.8299 7.54712C77.1752 7.81991 76.5206 8.36547 75.7568 9.02015C75.484 9.23838 75.2658 9.51117 74.993 9.78395C74.7747 10.0567 74.502 10.3295 74.3383 10.6023C74.1201 10.8751 73.9564 11.0933 73.7927 11.3115C73.6291 11.5298 73.5199 11.6934 73.4654 11.8025C73.3563 12.0208 73.3017 12.1299 73.3017 12.239C73.3017 12.2936 73.3563 12.4027 73.5199 12.5118ZM85.0314 20.9681C85.086 21.1863 85.1405 21.4045 85.086 21.6228C85.0314 21.841 84.9769 22.0047 84.9223 22.2229C84.8132 22.4957 84.595 22.7685 84.2676 22.9321C83.9403 23.1503 83.6129 23.314 83.231 23.4777C82.8491 23.6414 82.4127 23.805 81.9762 23.9687C81.5398 24.1324 81.1033 24.296 80.6669 24.4597C80.285 24.6234 79.9031 24.8416 79.5757 25.0598C79.2484 25.2781 79.0302 25.5508 78.9211 25.8782C78.7574 26.2601 78.7028 26.642 78.8119 27.0784C78.9211 27.4603 79.0302 27.8968 79.2484 28.2787C79.4121 28.6606 79.6303 29.0425 79.9031 29.4244C80.1213 29.8063 80.3395 30.0791 80.4486 30.3518C80.776 30.3518 81.1033 30.3518 81.4852 30.3518C81.8671 30.3518 82.1945 30.4064 82.5218 30.4064C82.8491 30.4609 83.1765 30.4609 83.3947 30.5155C83.6675 30.5701 83.8312 30.5701 83.9403 30.6246C84.1585 30.7337 84.2131 30.8428 84.1585 31.0611C84.1585 31.1156 83.9948 31.1702 83.7221 31.2247C83.4493 31.2793 83.1219 31.3339 82.7946 31.3339C82.4127 31.3884 82.0308 31.3884 81.6489 31.443C81.267 31.4975 80.9397 31.5521 80.6669 31.6066C80.6669 31.7158 80.6123 31.8249 80.6123 31.934C80.5578 32.0431 80.5578 32.1522 80.5032 32.2068C80.2304 32.8614 79.794 33.4616 79.1393 34.0071C78.5392 34.5527 77.8299 34.9346 77.1207 35.2074C76.3569 35.4802 75.5931 35.6984 74.8293 35.6984C74.0655 35.753 73.3563 35.6438 72.7561 35.3711C71.6105 34.88 70.9012 34.3345 70.6284 33.6798C70.3557 33.0251 70.3557 32.425 70.5739 31.8249C70.8467 31.1702 71.5013 30.6792 72.5379 30.2973C73.5745 29.9154 74.9384 29.8608 76.6297 30.0791C76.2478 29.6426 75.9204 29.1516 75.5385 28.7151C75.1566 28.2241 74.8293 27.7331 74.6111 27.1875C74.3383 26.642 74.2292 26.0964 74.1201 25.4963C74.0655 24.8962 74.1746 24.2415 74.4474 23.5322C74.8293 22.6048 75.5385 21.841 76.466 21.1317C77.448 20.4771 78.5937 19.9861 79.8485 19.6587C80.6669 19.4405 81.4307 19.3859 82.0308 19.4405C82.6855 19.495 83.2856 19.6587 83.8857 19.8769C84.2131 20.0406 84.4858 20.2043 84.6495 20.368C84.8677 20.5316 84.9769 20.7499 85.0314 20.9681ZM77.448 31.0065C76.1387 30.952 75.1566 31.0611 74.5565 31.2793C73.9564 31.4975 73.5745 31.7703 73.4654 32.0977C73.3563 32.425 73.3017 32.6978 73.4654 32.9706C73.5745 33.2433 73.7927 33.407 74.1201 33.5161C74.3928 33.6252 74.6656 33.6798 75.0475 33.7344C75.4294 33.7889 75.7568 33.7889 76.0841 33.6798C76.4115 33.6252 76.7388 33.5161 77.0661 33.2979C77.3389 33.1342 77.6117 32.8614 77.7208 32.5341C77.8845 32.0431 77.8299 31.4975 77.448 31.0065ZM90.0506 18.6767C90.5962 18.6767 91.0327 18.6221 91.5237 18.4585C91.9601 18.2948 92.342 18.1311 92.7239 17.8583C93.0513 17.5856 93.324 17.2582 93.5423 16.9309C93.7605 16.549 93.815 16.1671 93.815 15.6761C93.815 14.9123 93.5423 14.3122 92.9967 13.9303C92.4511 13.5484 91.851 13.3847 91.0872 13.3847C90.6508 13.3847 90.2143 13.4938 89.8324 13.6575C89.3959 13.8211 89.0686 14.0394 88.7413 14.3122C88.4139 14.5849 88.1411 14.9123 87.9775 15.2942C87.7593 15.6761 87.7047 16.058 87.7047 16.4399C87.7047 16.9854 87.9229 17.531 88.3594 17.9675C88.7413 18.4585 89.3414 18.6767 90.0506 18.6767ZM95.8336 29.8608C95.67 29.8608 95.5063 29.9699 95.3972 30.1336C95.2881 30.3518 95.0698 30.5701 94.7425 30.8428C94.2515 31.3339 93.7605 31.6612 93.2695 31.934C92.7785 32.1522 92.342 32.3159 91.9056 32.3159C91.4146 32.3159 91.0327 32.1522 90.7599 31.8794C90.4871 31.6066 90.3234 31.1156 90.3234 30.4609C90.3234 29.9699 90.378 29.4244 90.5416 28.7697C90.6508 28.1696 90.8144 27.5149 90.9781 26.8602C91.1418 26.2055 91.3054 25.5508 91.4146 24.9507C91.5237 24.296 91.6328 23.7505 91.6328 23.2049C91.6328 22.6593 91.4145 22.2229 90.9235 21.9501C90.4871 21.6228 89.9415 21.5136 89.3959 21.5136C88.9595 21.5136 88.523 21.6228 88.1957 21.841C87.8684 22.0592 87.541 22.2774 87.3228 22.6048C87.1046 22.9321 86.8863 23.2595 86.7772 23.6414C86.6681 24.0233 86.559 24.3506 86.5044 24.6779C86.3408 25.7145 86.2317 26.642 86.1771 27.5149C86.1225 28.3878 86.1225 29.2607 86.1225 30.0791C86.1225 30.7883 86.2317 31.3884 86.3953 31.9885C86.559 32.5887 86.8318 33.0797 87.1591 33.5161C87.4865 33.9526 87.9229 34.2799 88.4685 34.4981C89.0141 34.7709 89.6142 34.88 90.378 34.88C90.9781 34.88 91.5782 34.7709 92.0692 34.5527C92.5602 34.3345 93.0512 34.0071 93.4877 33.6798C93.9242 33.2979 94.3061 32.916 94.688 32.4795C95.0699 32.0431 95.4518 31.5521 95.7791 31.1156C95.9973 30.8428 96.1064 30.5701 96.1064 30.3518C96.1064 30.2427 96.0519 30.1882 95.9973 30.1336C95.9973 29.9154 95.9428 29.8608 95.8336 29.8608ZM131.95 15.6215C131.95 15.6761 131.896 15.7852 131.787 15.9489C131.677 16.1125 131.514 16.2216 131.296 16.3853C131.077 16.549 130.805 16.7127 130.532 16.8763C130.204 17.04 129.877 17.1491 129.55 17.2037C129.222 17.2582 128.895 17.3128 128.568 17.3128C128.295 18.2948 127.749 19.2223 126.986 20.0406C126.222 20.859 125.24 21.35 124.094 21.6228C123.33 21.7864 122.566 21.7319 121.912 21.5682C121.203 21.4045 120.602 21.0772 120.057 20.6407C119.729 20.368 119.402 20.0406 119.129 19.7133C119.075 19.8224 119.075 19.9315 119.02 20.0952C118.857 20.7499 118.529 21.4045 118.202 22.0592C117.82 22.7139 117.329 23.2595 116.729 23.5868C116.074 23.9687 115.474 24.0778 114.928 23.8596C114.437 23.6414 114.001 23.314 113.728 22.7685C113.565 22.4957 113.401 22.1683 113.237 21.841C113.074 21.5136 112.91 21.1863 112.801 20.8044C112.637 20.4771 112.528 20.1497 112.364 19.8769C112.255 19.6042 112.092 19.3314 111.982 19.1677C111.819 18.8949 111.655 18.7313 111.437 18.6767C111.273 18.6221 111.055 18.6221 110.782 18.7858C110.346 19.004 110.182 19.5496 110.182 20.3134C110.182 21.0772 110.237 22.0592 110.346 23.2595C110.4 23.8596 110.455 24.3506 110.509 24.8416C110.564 25.3326 110.619 25.7691 110.564 26.2055C110.564 26.642 110.455 26.9693 110.291 27.2967C110.128 27.624 109.855 27.8968 109.527 28.115C109.2 28.2787 108.927 28.3878 108.709 28.3878C108.436 28.3878 108.218 28.3332 108.054 28.2241C107.891 28.115 107.672 27.9513 107.509 27.7331C107.345 27.5149 107.181 27.2967 107.018 27.0784C106.909 26.9148 106.745 26.642 106.527 26.2601C106.363 25.8782 106.145 25.4417 105.927 25.0053C105.708 24.5688 105.545 24.1869 105.381 23.805C105.217 23.4231 105.108 23.2049 104.999 23.0958C104.89 22.9321 104.672 22.7685 104.399 22.6048C104.126 22.4411 103.853 22.4411 103.581 22.6048C103.308 22.7685 103.09 23.0412 102.926 23.3686C102.762 23.6959 102.599 24.1869 102.49 24.787C102.38 25.3872 102.326 26.151 102.326 27.0239C102.326 27.8968 102.38 28.9879 102.49 30.2973C102.544 31.0065 102.544 31.6612 102.435 32.2613C102.38 32.8614 102.108 33.2979 101.726 33.5161C101.235 33.7889 100.853 33.898 100.471 33.7344C100.089 33.6252 99.7072 33.2433 99.3253 32.6432C99.1616 32.3704 98.8888 31.8794 98.5069 31.2247C98.125 30.5701 97.7431 29.8063 97.3612 28.9879C96.9793 28.1696 96.5429 27.3512 96.161 26.5329C95.7791 25.7145 95.4517 25.0053 95.179 24.3506C94.7971 23.3686 94.6334 22.4957 94.688 21.6228C94.7971 20.8044 95.2335 20.0952 96.1064 19.6042C96.5429 19.3859 96.9793 19.2768 97.4703 19.3314C97.9614 19.3859 98.3433 19.6587 98.6706 20.2043C99.2707 21.1863 99.7617 22.2774 100.144 23.4777C100.144 22.823 100.198 22.1683 100.253 21.5682C100.307 20.9681 100.416 20.368 100.635 19.8224C100.853 19.2768 101.126 18.7313 101.508 18.2402C101.889 17.7492 102.38 17.3128 103.035 16.9309C103.472 16.6581 103.908 16.549 104.344 16.549C104.781 16.549 105.163 16.6035 105.599 16.7672C105.981 16.9309 106.363 17.1491 106.69 17.4219C107.018 17.6947 107.291 18.022 107.563 18.2948C107.836 17.2037 108.218 16.3853 108.654 15.7852C109.091 15.1851 109.746 14.6395 110.509 14.1485C110.837 13.9303 111.164 13.8757 111.546 13.8757C111.928 13.8757 112.255 13.9303 112.583 14.0394C112.91 14.1485 113.237 14.3667 113.565 14.5849C113.837 14.8577 114.11 15.1305 114.328 15.4578C114.656 15.9489 114.874 16.4944 115.092 17.04C115.256 17.5856 115.42 18.0766 115.529 18.5676C115.638 19.0586 115.747 19.495 115.856 19.8769C115.965 20.2588 116.129 20.5862 116.238 20.8044C116.402 21.0226 116.565 21.1863 116.674 21.2409C116.783 21.2954 116.947 21.2409 117.111 21.1317C117.274 21.0226 117.438 20.859 117.602 20.6953C117.765 20.4771 117.929 20.2588 118.038 19.9861C118.202 19.7133 118.311 19.3859 118.42 19.1131C118.475 19.0586 118.475 18.9495 118.475 18.8949C118.147 18.2948 117.929 17.6401 117.765 16.9309C117.602 16.1125 117.602 15.2942 117.711 14.3667C117.82 13.4392 118.093 12.5663 118.529 11.748C118.911 10.9296 119.457 10.2204 120.111 9.62028C120.766 9.02016 121.475 8.63826 122.348 8.47459C122.785 8.36547 123.221 8.42003 123.548 8.5837C123.876 8.74737 124.094 9.02015 124.203 9.45661C124.203 9.56572 124.258 9.67484 124.258 9.78395C124.258 9.89306 124.258 10.0022 124.203 10.1113C124.258 10.1113 124.312 10.1113 124.312 10.0567C124.367 10.0567 124.421 10.0022 124.476 10.0022C125.021 9.89306 125.567 9.94762 126.004 10.1113C126.44 10.3295 126.876 10.6023 127.258 10.9842C127.64 11.3661 127.913 11.8571 128.186 12.4027C128.404 12.9482 128.622 13.4938 128.731 14.0939C128.84 14.6395 128.84 15.1851 128.84 15.8397C129.004 15.8397 129.113 15.8397 129.277 15.8397C129.386 15.8397 129.55 15.8397 129.713 15.8397C129.877 15.8397 130.041 15.8397 130.204 15.7852C130.368 15.7852 130.586 15.7306 130.75 15.7306C130.914 15.7306 131.077 15.6761 131.241 15.6761C131.405 15.6215 131.459 15.6215 131.514 15.6215C131.732 15.4033 131.896 15.4578 131.95 15.6215ZM126.604 17.04C125.731 16.7672 124.967 16.3853 124.258 15.8397C123.548 15.2942 123.057 14.6395 122.73 13.9303C122.621 14.4213 122.512 14.9668 122.457 15.4578C122.403 15.9489 122.457 16.4944 122.566 16.9854C122.621 17.2037 122.676 17.4764 122.785 17.8038C122.894 18.0766 123.003 18.3494 123.167 18.5676C123.33 18.7858 123.548 19.004 123.767 19.1131C123.985 19.2768 124.312 19.2768 124.64 19.2223C125.131 19.1131 125.567 18.8949 125.894 18.4585C126.222 18.0766 126.44 17.5856 126.604 17.04ZM126.822 15.0214C126.822 14.8032 126.822 14.5849 126.822 14.3667C126.822 14.1485 126.767 13.9303 126.713 13.7666C126.658 13.6029 126.658 13.4392 126.549 13.2756C126.495 13.1119 126.385 12.8937 126.331 12.7846C126.222 12.6209 126.113 12.5118 126.058 12.4027C125.949 12.2936 125.84 12.239 125.731 12.2936C125.513 12.3481 125.403 12.4572 125.349 12.6209C125.294 12.7846 125.294 13.0028 125.349 13.221C125.403 13.5484 125.567 13.8757 125.84 14.203C126.113 14.5304 126.44 14.8032 126.822 15.0214Z" fill=""/>
                    </svg>
                </a>
                <p>Un proyecto hecho por Carla Cardona :)</p>
            </div>

        </div>
        

    </footer>
    <?php wp_footer(); ?>
</body>
</html>