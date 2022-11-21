<?php /* Template Name: Home Page */ ?>

<?php
get_header();
the_post();
?>


<main class="main">
    <section class="hero">
        <div class="wrap">
            <div class="hero__left">
                <h1 class="title">
                    The Intelligent Immigration Platform:
                </h1>
                <h3 class="title">
                    Built by Immigration attorneys for Immigration attorneys
                </h3>
                <h4 class="text">
                    Hi I'm Ovie, your AI guide that will help you provide better strategy, knowledge, and build
                    entire visa packages that will increase your approval rate and save you time.
                </h4>
                <div class="hero__btns">
                    <a href="/" class="btn btn_blue">
                        Sign Up Now
                    </a>
                    <a href="/" class="btn btn_trns">
                        Book a Demo
                        <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.16668 6.83335H11.05L8.02501 10.4667C7.73046 10.8211 7.77896 11.3471 8.13334 11.6417C8.48773 11.9362 9.01379 11.8877 9.30834 11.5334L13.475 6.53336C13.503 6.49358 13.5281 6.45181 13.55 6.40835C13.55 6.36669 13.5917 6.34169 13.6083 6.30002C13.6461 6.20447 13.6659 6.10276 13.6667 6.00002V6.00002C13.6659 5.89728 13.6461 5.79557 13.6083 5.70002C13.6083 5.65835 13.5667 5.63335 13.55 5.59169C13.5281 5.54824 13.503 5.50646 13.475 5.46669L9.30834 0.466687V0.466687C9.14971 0.276238 8.91454 0.166285 8.66668 0.166689V0.166689C8.47197 0.166308 8.28327 0.234121 8.13334 0.358355L8.13334 0.358355C7.77903 0.652097 7.72994 1.17745 8.02368 1.53176C8.02412 1.53229 8.02457 1.53282 8.02501 1.53336L11.05 5.16669H1.16668C0.706439 5.16669 0.333344 5.53979 0.333344 6.00002C0.333344 6.46026 0.706439 6.83336 1.16668 6.83336L1.16668 6.83335Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="hero__right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/hero-img-1.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/hero-img-2.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/hero-img-3.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/hero-img-4.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/hero-img-5.png" alt="">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/hero-img-6.png" alt="">
            </div>
        </div>
    </section>
    <section class="visas">
        <div class="wrap">
            <h2 class="title">
                Visas.AI
            </h2>
            <div class="with-hint">
                <h4 class="text">
                    The only platform that will make you a better attorney with better visa approval ratings.
                </h4>
                <div class="hint">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5229 2 22 6.47715 22 12C22 17.5229 17.5229 22 12 22C6.47715 22 2 17.5229 2 12ZM4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12ZM12.7071 7.29289C13.0976 7.68341 13.0976 8.31658 12.7071 8.7071C12.3166 9.09762 11.6834 9.09762 11.2929 8.7071C10.9024 8.31658 10.9024 7.68341 11.2929 7.29289C11.6834 6.90237 12.3166 6.90237 12.7071 7.29289ZM11 11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V11Z" fill="#0F5AB7" />
                    </svg>
                    <div class="hint__message">
                        Based on the numbers of Velie Law in 2022
                        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0L12 0L6.8 6.93333C6.4 7.46667 5.6 7.46667 5.2 6.93333L0 0Z" fill="#162632" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="visas__tabs">
                <div class="visas__tab active">
                    Strategy
                </div>
                <div class="visas__tab">
                    Contracting With Clients
                </div>
                <div class="visas__tab">
                    Document Production
                </div>
                <div class="visas__tab">
                    Winning Strategies
                </div>
                <div class="visas__tab">
                    RFE Responder
                </div>
            </div>
            <div class="visas__items">
                <div class="visas__item">
                    <div class="visas__descr">
                        Strategy questions and suggested solutions for most visa types.
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                </div>
                <div class="visas__item">
                    <div class="visas__descr">
                        Strategy questions and suggested solutions for most visa types.
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                </div>
                <div class="visas__item">
                    <div class="visas__descr">
                        Strategy questions and suggested solutions for most visa types.
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                </div>
                <div class="visas__item">
                    <div class="visas__descr">
                        Strategy questions and suggested solutions for most visa types.
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                </div>
                <div class="visas__item">
                    <div class="visas__descr">
                        Strategy questions and suggested solutions for most visa types.
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                </div>
            </div>
            <div class="swiper visas__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide visas__item">
                        <div class="visas__name">
                            Strategy
                        </div>
                        <div class="visas__descr">
                            Strategy questions and suggested solutions for most visa types.
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                    </div>
                    <div class="swiper-slide visas__item">
                        <div class="visas__name">
                            Strategy
                        </div>
                        <div class="visas__descr">
                            Strategy questions and suggested solutions for most visa types.
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                    </div>
                    <div class="swiper-slide visas__item">
                        <div class="visas__name">
                            Strategy
                        </div>
                        <div class="visas__descr">
                            Strategy questions and suggested solutions for most visa types.
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                    </div>
                    <div class="swiper-slide visas__item">
                        <div class="visas__name">
                            Strategy
                        </div>
                        <div class="visas__descr">
                            Strategy questions and suggested solutions for most visa types.
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/for-item.jpg" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="visas__bg">
                <svg width="1440" height="543" viewBox="0 0 1440 543" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.3">
                        <path d="M1603.18 453.161C1603.18 453.161 1441.94 605.314 1292.28 436.041C1142.62 266.688 954.619 165.977 764.689 358.88C574.68 551.783 425.019 414.581 214.031 292.409C2.96263 170.236 -135.204 315.959 -135.204 315.959" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M1600.44 437.086C1600.44 437.086 1432.62 590.042 1286.17 422.457C1139.64 254.873 952.288 157.778 763.966 351.565C575.644 545.353 423.733 414.098 217.889 289.193C12.0452 164.289 -135.526 299.883 -135.847 299.883" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M1597.71 421.011C1597.71 421.011 1423.37 574.851 1279.98 408.954C1136.59 243.138 949.957 149.58 763.242 344.251C576.609 539.003 422.447 413.536 221.827 285.898C21.208 158.26 -135.847 283.808 -136.49 283.808" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M1594.98 404.936C1594.98 404.936 1414.05 559.58 1273.79 395.451C1133.62 231.323 947.626 141.382 762.599 336.937C577.493 532.573 421.08 413.054 225.766 282.683C30.371 152.313 -136.169 267.733 -137.133 267.733" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-137.776 251.658C-136.49 251.658 39.4535 146.365 229.624 279.468C419.794 412.571 578.457 526.223 761.876 329.703C945.295 133.103 1130.64 219.588 1267.68 381.948C1404.73 544.308 1592.32 388.86 1592.32 388.86" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-138.419 235.582C-136.731 235.502 48.6164 140.336 233.562 276.172C418.508 412.089 579.341 519.874 761.153 322.389C942.964 124.904 1127.59 207.772 1261.5 368.364C1395.4 529.036 1589.59 372.865 1589.59 372.865" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-139.143 219.507C-137.053 219.427 57.7793 134.389 237.42 272.958C417.142 411.526 580.306 513.444 760.51 315.075C940.633 116.706 1124.61 195.957 1255.31 354.861C1386.08 513.765 1586.86 356.79 1586.86 356.79" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-139.786 203.432C-137.374 203.352 66.8618 128.441 241.359 269.742C415.856 411.044 581.19 507.094 759.786 307.841C938.302 108.507 1121.56 184.222 1249.2 341.358C1376.76 498.493 1584.21 340.715 1584.21 340.715" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-140.429 187.357C-137.696 187.276 76.0247 122.413 245.297 266.527C414.57 410.562 582.155 500.744 759.063 300.527C935.971 100.309 1118.59 172.407 1243.01 327.855C1367.43 483.222 1581.47 324.64 1581.47 324.64" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-141.072 171.282C-138.017 171.201 85.1876 116.465 249.155 263.232C413.204 410.08 583.119 494.314 758.34 293.212C933.64 92.1109 1115.53 160.672 1236.82 314.271C1358.11 467.951 1578.74 308.564 1578.74 308.564" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-141.715 155.206C-138.339 155.045 94.2701 110.517 253.094 260.017C411.917 409.517 584.003 487.964 757.697 285.898C931.309 83.9125 1112.56 148.857 1230.63 300.768C1348.78 452.679 1576.01 292.489 1576.01 292.489" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-142.358 139.131C-138.66 138.97 103.433 104.489 257.032 256.802C410.551 409.035 584.968 481.534 756.973 278.664C928.979 75.7139 1109.5 137.041 1224.52 287.264C1339.46 437.407 1573.36 276.414 1573.36 276.414" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-143.001 123.056C-138.982 122.895 112.596 98.5408 260.89 253.506C409.265 408.552 585.852 475.184 756.25 271.35C926.648 67.5155 1106.53 125.306 1218.33 273.761C1330.14 422.136 1570.62 260.338 1570.62 260.338" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-143.644 106.98C-139.223 106.82 121.679 92.5126 264.829 250.291C407.979 408.07 586.816 468.835 755.607 264.036C924.317 59.3172 1103.48 113.491 1212.14 260.178C1320.81 406.945 1567.89 244.344 1567.89 244.344" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-144.287 90.905C-139.545 90.7442 130.841 86.5646 268.767 247.076C406.613 407.507 587.701 462.404 754.883 256.802C922.066 51.1187 1100.5 101.756 1206.04 246.674C1311.49 391.673 1565.16 228.268 1565.16 228.268" stroke="#0A1325" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-144.93 74.8299C-139.866 74.5888 140.004 80.617 272.625 243.781C405.327 407.025 588.665 456.055 754.16 249.488C919.735 42.9205 1097.45 89.9406 1199.85 233.171C1302.25 376.402 1562.5 212.193 1562.5 212.193" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-145.573 58.7544C-140.188 58.5133 149.087 74.5886 276.564 240.566C404.041 406.543 589.63 449.625 753.517 242.173C917.404 34.7219 1094.47 78.1251 1193.66 219.668C1292.92 361.13 1559.77 196.118 1559.77 196.118" stroke="#0A1325" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-146.216 42.6791C-140.509 42.438 158.25 68.6407 280.502 237.351C402.674 406.061 590.514 443.275 752.793 234.859C915.073 26.5235 1091.42 66.3901 1187.55 206.084C1283.6 345.859 1557.04 180.042 1557.04 180.042" stroke="#0C1932" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-148.065 45.4121C-142.277 45.2514 155.035 70.4895 277.046 242.977C399.057 415.465 597.667 457.903 746.283 240.566C876.573 49.9935 1025.51 55.2984 1128.39 151.027C1148.33 169.513 1166.65 190.813 1182.81 214.283C1233.28 287.023 1322.42 284.934 1402.48 258.49C1488.8 230.037 1560.58 182.132 1560.58 182.132" stroke="#0C1932" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-149.833 48.0644C-144.126 48.1447 151.739 72.2576 273.59 248.603C395.44 424.949 604.258 471.728 739.773 246.192C864.517 38.6603 1017.07 50.6364 1122.61 156.01C1142.78 176.104 1161.51 198.368 1178.15 222.401C1232.48 300.285 1322.58 300.044 1404.24 269.34C1493.3 235.823 1564.11 184.222 1564.11 184.222" stroke="#0C1932" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-151.681 50.7973C-145.894 50.9581 148.524 74.1065 270.214 254.23C391.823 434.353 610.286 484.749 733.262 251.819C852.219 26.7648 1008.71 45.8944 1116.82 160.913C1137.23 182.695 1156.36 205.924 1173.48 230.519C1231.76 313.467 1322.82 315.075 1406.01 280.191C1497.8 241.611 1567.65 186.231 1567.65 186.231" stroke="#0F2142" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-153.45 53.53C-147.743 53.8515 145.309 75.8747 266.758 259.856C388.206 443.838 615.671 497.288 726.752 257.525C839.52 14.3868 1000.27 41.0717 1111.03 165.896C1131.69 189.205 1151.22 213.559 1168.82 238.637C1230.95 326.729 1322.98 330.105 1407.78 290.962C1502.3 247.398 1571.19 188.321 1571.19 188.321" stroke="#0F2142" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-155.298 56.2627C-149.511 56.6646 142.014 77.7232 263.302 265.482C384.59 453.322 620.494 509.344 720.321 263.151C826.338 1.60676 991.994 36.249 1105.24 170.799C1126.14 195.716 1146.07 221.115 1164.16 246.755C1230.23 339.991 1323.22 345.135 1409.63 301.812C1506.8 253.104 1574.72 190.411 1574.72 190.411" stroke="#0F2142" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-157.067 58.9152C-151.36 59.5582 138.799 79.5719 259.845 271.109C380.973 462.726 624.754 521.079 713.811 268.778C812.754 -11.4945 983.634 31.4265 1099.38 175.782C1120.68 202.307 1140.93 228.67 1159.42 254.953C1229.43 353.173 1323.39 360.085 1411.4 312.663C1511.22 258.811 1578.26 192.501 1578.26 192.501" stroke="#102A55" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-158.915 61.648C-153.128 62.3714 135.584 81.3401 256.47 276.815C377.356 472.21 628.532 532.653 707.301 274.485C798.608 -24.7566 975.356 26.6039 1093.59 180.766C1115.13 208.817 1135.79 236.225 1154.76 263.071C1228.62 366.435 1323.55 375.035 1413.17 323.434C1515.73 264.437 1581.71 194.51 1581.71 194.51" stroke="#102A55" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-160.684 64.3808C-154.977 65.265 132.288 83.1889 253.013 282.442C373.739 481.695 631.908 544.067 700.79 280.111C783.899 -38.2597 967.157 21.701 1087.8 185.669C1109.66 215.328 1130.64 243.861 1150.09 271.189C1227.9 379.697 1323.71 389.985 1414.93 334.285C1520.15 270.064 1585.25 196.6 1585.25 196.6" stroke="#102A55" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-162.532 67.1138C-156.745 68.0783 129.073 84.9573 249.557 288.068C370.041 491.099 634.881 555.48 694.28 285.737C768.708 -51.6825 958.878 16.7982 1082.01 190.652C1104.12 221.919 1125.5 251.417 1145.43 279.307C1227.09 392.959 1323.87 404.855 1416.7 345.136C1524.57 275.69 1588.79 198.69 1588.79 198.69" stroke="#12356B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-164.301 69.7659C-158.594 70.9716 125.858 86.8057 246.181 293.694C366.424 500.583 637.453 566.894 687.769 291.444C752.954 -65.2663 950.68 11.895 1076.23 195.555C1098.65 228.429 1120.35 258.972 1140.77 287.505C1226.37 406.141 1323.95 419.805 1418.47 355.906C1528.99 281.316 1592.32 200.779 1592.32 200.779" stroke="#12356B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-166.149 72.4987C-160.362 73.7848 122.563 88.6543 242.725 299.321C362.808 510.068 639.784 578.387 681.339 297.07C736.718 -78.7696 942.482 6.992 1070.44 200.538C1093.19 234.939 1115.21 266.608 1136.03 295.623C1225.57 419.403 1324.11 434.675 1420.24 366.757C1533.33 286.862 1595.86 202.789 1595.86 202.789" stroke="#12356B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-167.917 75.2316C-162.211 76.6784 119.348 90.4227 239.269 304.947C359.191 519.472 641.874 589.881 674.828 302.697C720.08 -92.1923 934.283 2.00879 1064.65 205.522C1087.64 241.45 1110.07 274.163 1131.37 303.742C1224.84 432.665 1324.19 449.544 1422.01 377.607C1537.75 292.489 1599.4 204.879 1599.4 204.879" stroke="#124082" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-169.766 77.9646C-163.979 79.4918 116.133 92.2716 235.813 310.574C355.574 528.956 643.723 601.536 668.318 308.404C702.96 -105.535 926.165 -2.894 1058.87 210.425C1082.18 247.961 1104.92 281.719 1126.7 311.86C1224.04 445.847 1324.27 464.414 1423.78 388.458C1542.09 298.035 1602.93 206.969 1602.93 206.969" stroke="#124082" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-171.534 80.6168C-165.828 82.3851 112.917 94.0397 232.437 316.2C351.957 538.36 645.411 613.271 661.808 314.03C685.519 -118.797 918.449 -8.11863 1053.08 215.408C1076.76 254.471 1099.75 289.327 1122.04 319.978C1223.24 459.109 1324.43 479.283 1425.54 399.229C1546.43 303.581 1606.47 209.058 1606.47 209.058" stroke="#124082" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-173.383 83.3497C-167.596 85.1983 109.622 95.8883 228.981 321.826C348.34 547.845 646.938 625.086 655.297 319.656C667.675 -131.898 910.17 -12.9412 1047.21 220.311C1071.24 260.981 1094.63 296.91 1117.38 328.176C1222.51 472.371 1324.35 493.992 1427.39 410.079C1550.61 308.966 1610.01 211.068 1610.01 211.068" stroke="#114D9C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-175.151 86.0824C-169.445 88.0918 106.407 97.6566 225.525 327.533C344.723 557.329 648.385 637.062 648.787 325.363C649.51 -144.839 901.892 -17.8442 1041.42 225.294C1065.78 267.492 1089.49 304.465 1112.64 336.294C1221.71 485.553 1324.51 508.942 1429.16 420.93C1555.03 314.592 1613.46 213.157 1613.46 213.157" stroke="#114D9C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                        <path d="M-177 88.8151C-171.213 90.9048 103.192 99.5051 222.149 333.159C341.106 566.733 649.671 649.199 642.356 330.989C631.104 -157.699 893.693 -22.6669 1035.64 230.277C1177.66 483.141 1302.33 543.183 1430.93 431.701C1559.45 320.299 1617 215.247 1617 215.247" stroke="#114D9C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    </g>
                </svg>
            </div>
    </section>
    <section class="press">
        <div class="wrap">
            <h2 class="title tac">
                Read our Press
            </h2>
            <div class="press__items">
                <a href="/" class="press__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/buzzfeed.png" alt="">
                </a>
                <a href="/" class="press__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/laweekly.png" alt="">
                </a>
                <a href="/" class="press__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/fox.png" alt="">
                </a>
                <a href="/" class="press__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/ritz.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="how">
        <div class="wrap">
            <h2 class="title">
                How Visas.AI works for You
            </h2>
            <div class="with-hint">
                <h4 class="text">
                    The only platform that will make you a better attorney with better visa approval ratings.
                </h4>
                <div class="hint">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5229 2 22 6.47715 22 12C22 17.5229 17.5229 22 12 22C6.47715 22 2 17.5229 2 12ZM4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12ZM12.7071 7.29289C13.0976 7.68341 13.0976 8.31658 12.7071 8.7071C12.3166 9.09762 11.6834 9.09762 11.2929 8.7071C10.9024 8.31658 10.9024 7.68341 11.2929 7.29289C11.6834 6.90237 12.3166 6.90237 12.7071 7.29289ZM11 11C11 10.4477 11.4477 10 12 10C12.5523 10 13 10.4477 13 11V16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16V11Z" fill="#0F5AB7" />
                    </svg>
                    <div class="hint__message">
                        Based on the numbers of Velie Law in 2022
                    </div>
                </div>
            </div>
            <div class="how__items">
                <div class="how__item">
                    <div class="how__name">
                        Spend less time on administrative tasks
                    </div>
                    <div class="how__descr">
                        Our platform was designed to reduce the time and number of people involved in producing
                        visas.
                    </div>
                </div>
                <div class="how__item">
                    <div class="how__name">
                        Identifies issues in visa cases and answers them
                    </div>
                    <div class="how__descr">
                        Strategy questions help attorneys identify potential problems and suggest solutions.
                    </div>
                </div>
                <div class="how__item">
                    <div class="how__name">
                        Reduce the time spent on research
                    </div>
                    <div class="how__descr">
                        Visas.AI suggests winning strategies from its database of immigration knowledge.
                    </div>
                </div>
                <div class="how__item">
                    <div class="how__name">
                        Build authority-based briefs instead of cover letters, instantly
                    </div>
                    <div class="how__descr">
                        Our briefs layout the right regulations, memos, AAO, and federal case law for your initial
                        petition reducing RFEs and improving approval ratings.
                    </div>
                </div>
                <div class="how__item">
                    <div class="how__name">
                        Effectively addresses RFE issues upfront
                    </div>
                    <div class="how__descr">
                        Our AI platform will detect issues upfront in regards to RFEs and assist with
                    </div>
                </div>
            </div>
            <div class="swiper how__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide how__item">
                        <div class="how__name">
                            Spend less time on administrative tasks
                        </div>
                        <div class="how__descr">
                            Our platform was designed to reduce the time and number of people involved in
                            producing
                            visas.
                        </div>
                    </div>
                    <div class="swiper-slide how__item">
                        <div class="how__name">
                            Spend less time on administrative tasks
                        </div>
                        <div class="how__descr">
                            Our platform was designed to reduce the time and number of people involved in
                            producing
                            visas.
                        </div>
                    </div>
                    <div class="swiper-slide how__item">
                        <div class="how__name">
                            Spend less time on administrative tasks
                        </div>
                        <div class="how__descr">
                            Our platform was designed to reduce the time and number of people involved in
                            producing
                            visas.
                        </div>
                    </div>
                    <div class="swiper-slide how__item">
                        <div class="how__name">
                            Spend less time on administrative tasks
                        </div>
                        <div class="how__descr">
                            Our platform was designed to reduce the time and number of people involved in
                            producing
                            visas.
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="how__bg bg-waves">
            <svg width="1440" height="543" viewBox="0 0 1440 543" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.3">
                    <path d="M1603.18 89.2882C1603.18 89.2882 1441.94 -62.8642 1292.28 106.408C1142.62 275.761 954.619 376.473 764.689 183.57C574.68 -9.33354 425.019 127.869 214.031 250.041C2.96263 372.213 -135.204 226.491 -135.204 226.491" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M1600.44 105.363C1600.44 105.363 1432.62 -47.5927 1286.17 119.992C1139.64 287.577 952.288 384.671 763.966 190.884C575.644 -2.90344 423.733 128.351 217.889 253.256C12.0452 378.161 -135.526 242.566 -135.847 242.566" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M1597.71 121.439C1597.71 121.439 1423.37 -32.4014 1279.98 133.495C1136.59 299.312 949.957 392.87 763.242 198.198C576.609 3.44642 422.447 128.914 221.827 256.551C21.208 384.189 -135.847 258.641 -136.49 258.641" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M1594.98 137.514C1594.98 137.514 1414.05 -17.1302 1273.79 146.998C1133.62 311.127 947.626 401.068 762.599 205.512C577.493 9.87627 421.08 129.396 225.766 259.766C30.371 390.137 -136.169 274.716 -137.133 274.716" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-137.776 290.792C-136.49 290.792 39.4535 396.085 229.624 262.982C419.794 129.878 578.457 16.2262 761.876 212.746C945.295 409.347 1130.64 322.862 1267.68 160.502C1404.73 -1.85849 1592.32 153.589 1592.32 153.589" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-138.419 306.867C-136.731 306.947 48.6164 402.113 233.562 266.277C418.508 130.361 579.341 22.5759 761.153 220.061C942.964 417.545 1127.59 334.677 1261.5 174.085C1395.4 13.413 1589.59 169.584 1589.59 169.584" stroke="#05080F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-139.143 322.942C-137.053 323.023 57.7793 408.061 237.42 269.492C417.142 130.923 580.306 29.006 760.51 227.375C940.633 425.744 1124.61 346.493 1255.31 187.589C1386.08 28.6845 1586.86 185.66 1586.86 185.66" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-139.786 339.018C-137.374 339.098 66.8618 414.009 241.359 272.707C415.856 131.406 581.19 35.3558 759.786 234.609C938.302 433.942 1121.56 358.228 1249.2 201.092C1376.76 43.9561 1584.21 201.735 1584.21 201.735" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-140.429 355.093C-137.696 355.173 76.0247 420.037 245.297 275.922C414.57 131.888 582.155 41.7055 759.063 241.923C935.971 442.14 1118.59 370.043 1243.01 214.595C1367.43 59.2275 1581.47 217.81 1581.47 217.81" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-141.072 371.168C-138.017 371.248 85.1876 425.985 249.155 279.217C413.204 132.37 583.119 48.1354 758.34 249.237C933.64 450.339 1115.53 381.778 1236.82 228.178C1358.11 74.4988 1578.74 233.885 1578.74 233.885" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-141.715 387.243C-138.339 387.404 94.2701 431.932 253.094 282.432C411.917 132.932 584.003 54.485 757.697 256.551C931.309 458.537 1112.56 393.593 1230.63 241.682C1348.78 89.7702 1576.01 249.96 1576.01 249.96" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-142.358 403.319C-138.66 403.479 103.433 437.961 257.032 285.648C410.551 133.415 584.968 60.9154 756.973 263.785C928.979 466.736 1109.5 405.408 1224.52 255.185C1339.46 105.042 1573.36 266.036 1573.36 266.036" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-143.001 419.394C-138.982 419.555 112.596 443.909 260.89 288.943C409.265 133.897 585.852 67.2651 756.25 271.1C926.648 474.934 1106.53 417.143 1218.33 268.688C1330.14 120.314 1570.62 282.111 1570.62 282.111" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-143.644 435.469C-139.223 435.63 121.679 449.937 264.829 292.158C407.979 134.379 586.816 73.6149 755.607 278.414C924.317 483.132 1103.48 428.959 1212.14 282.272C1320.81 135.505 1567.89 298.106 1567.89 298.106" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-144.287 451.545C-139.545 451.705 130.841 455.885 268.767 295.373C406.613 134.942 587.701 80.045 754.883 285.648C922.066 491.331 1100.5 440.694 1206.04 295.775C1311.49 150.776 1565.16 314.181 1565.16 314.181" stroke="#0A1325" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-144.93 467.62C-139.866 467.861 140.004 461.832 272.625 298.669C405.327 135.424 588.665 86.3946 754.16 292.962C919.735 499.529 1097.45 452.509 1199.85 309.278C1302.25 166.048 1562.5 330.256 1562.5 330.256" stroke="#060A13" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-145.573 483.695C-140.188 483.936 149.087 467.861 276.564 301.884C404.041 135.907 589.63 92.825 753.517 300.276C917.404 507.728 1094.47 464.324 1193.66 322.782C1292.92 181.319 1559.77 346.332 1559.77 346.332" stroke="#0A1325" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-146.216 499.77C-140.509 500.011 158.25 473.809 280.502 305.099C402.674 136.389 590.514 99.1745 752.793 307.59C915.073 515.926 1091.42 476.059 1187.55 336.365C1283.6 196.591 1557.04 362.407 1557.04 362.407" stroke="#0C1932" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-148.065 497.037C-142.277 497.198 155.035 471.96 277.046 299.472C399.057 126.985 597.667 84.546 746.283 301.884C876.573 492.456 1025.51 487.151 1128.39 391.423C1148.33 372.936 1166.65 351.637 1182.81 328.167C1233.28 255.426 1322.42 257.516 1402.48 283.96C1488.8 312.413 1560.58 360.317 1560.58 360.317" stroke="#0C1932" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-149.833 494.385C-144.126 494.305 151.739 470.192 273.59 293.846C395.44 117.5 604.258 70.7214 739.773 296.257C864.517 503.789 1017.07 491.813 1122.61 386.44C1142.78 366.346 1161.51 344.081 1178.15 320.049C1232.48 242.164 1322.58 242.405 1404.24 273.109C1493.3 306.626 1564.11 358.228 1564.11 358.228" stroke="#0C1932" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-151.681 491.652C-145.894 491.492 148.524 468.343 270.214 288.22C391.823 108.096 610.286 57.7004 733.262 290.631C852.219 515.685 1008.71 496.555 1116.82 381.537C1137.23 359.755 1156.36 336.526 1173.48 311.931C1231.76 228.982 1322.82 227.375 1406.01 262.258C1497.8 300.839 1567.65 356.218 1567.65 356.218" stroke="#0F2142" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-153.45 488.919C-147.743 488.598 145.309 466.575 266.758 282.593C388.206 98.6119 615.671 45.1616 726.752 284.924C839.52 528.063 1000.27 501.378 1111.03 376.553C1131.69 353.244 1151.22 328.89 1168.82 303.813C1230.95 215.72 1322.98 212.344 1407.78 251.488C1502.3 295.052 1571.19 354.128 1571.19 354.128" stroke="#0F2142" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-155.298 486.187C-149.511 485.785 142.014 464.726 263.302 276.967C384.59 89.1275 620.494 33.1052 720.321 279.298C826.338 540.843 991.994 506.2 1105.24 371.65C1126.14 346.734 1146.07 321.335 1164.16 295.695C1230.23 202.458 1323.22 197.314 1409.63 240.637C1506.8 289.345 1574.72 352.039 1574.72 352.039" stroke="#0F2142" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-157.067 483.534C-151.36 482.891 138.799 462.878 259.845 271.341C380.973 79.7235 624.754 21.3703 713.811 273.672C812.754 553.944 983.634 511.023 1099.38 366.667C1120.68 340.143 1140.93 313.779 1159.42 287.496C1229.43 189.276 1323.39 182.364 1411.4 229.786C1511.22 283.638 1578.26 349.949 1578.26 349.949" stroke="#102A55" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-158.915 480.801C-153.128 480.078 135.584 461.109 256.47 265.634C377.356 70.2391 628.532 9.7961 707.301 267.965C798.608 567.206 975.356 515.846 1093.59 361.684C1115.13 333.632 1135.79 306.224 1154.76 279.378C1228.62 176.014 1323.55 167.414 1413.17 219.016C1515.73 278.012 1581.71 347.939 1581.71 347.939" stroke="#102A55" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-160.684 478.069C-154.977 477.185 132.288 459.261 253.013 260.008C373.739 60.7548 631.908 -1.61727 700.79 262.339C783.899 580.709 967.157 520.749 1087.8 356.781C1109.66 327.122 1130.64 298.588 1150.09 271.26C1227.9 162.752 1323.71 152.464 1414.93 208.165C1520.15 272.386 1585.25 345.85 1585.25 345.85" stroke="#102A55" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-162.532 475.336C-156.745 474.371 129.073 457.492 249.557 254.381C370.041 51.3505 634.881 -13.031 694.28 256.712C768.708 594.132 958.878 525.651 1082.01 351.797C1104.12 320.531 1125.5 291.033 1145.43 263.142C1227.09 149.49 1323.87 137.594 1416.7 197.314C1524.57 266.759 1588.79 343.76 1588.79 343.76" stroke="#12356B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-164.301 472.683C-158.594 471.478 125.858 455.644 246.181 248.755C366.424 41.8662 637.453 -24.4443 687.769 251.005C752.954 607.716 950.68 530.554 1076.23 346.894C1098.65 314.02 1120.35 283.477 1140.77 254.944C1226.37 136.308 1323.95 122.644 1418.47 186.544C1528.99 261.133 1592.32 341.67 1592.32 341.67" stroke="#12356B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-166.149 469.951C-160.362 468.665 122.563 453.795 242.725 243.129C362.808 32.3819 639.784 -35.9379 681.339 245.379C736.718 621.219 942.482 535.457 1070.44 341.911C1093.19 307.51 1115.21 275.842 1136.03 246.826C1225.57 123.046 1324.11 107.775 1420.24 175.693C1533.33 255.587 1595.86 339.661 1595.86 339.661" stroke="#12356B" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-167.917 467.218C-162.211 465.771 119.348 452.027 239.269 237.502C359.191 22.9778 641.874 -47.4319 674.828 239.753C720.08 634.642 934.283 540.441 1064.65 336.928C1087.64 301 1110.07 268.286 1131.37 238.708C1224.84 109.784 1324.19 92.9052 1422.01 164.842C1537.75 249.961 1599.4 337.571 1599.4 337.571" stroke="#124082" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-169.766 464.485C-163.979 462.958 116.133 450.178 235.813 231.876C355.574 13.4931 643.723 -59.0868 668.318 234.046C702.96 647.984 926.165 545.343 1058.87 332.025C1082.18 294.489 1104.92 260.731 1126.7 230.59C1224.04 96.6022 1324.27 78.0353 1423.78 153.991C1542.09 244.414 1602.93 335.481 1602.93 335.481" stroke="#124082" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-171.534 461.833C-165.828 460.064 112.917 448.41 232.437 226.25C351.957 4.08938 645.411 -70.8214 661.808 228.42C685.519 661.246 918.449 550.568 1053.08 327.041C1076.76 287.979 1099.75 253.122 1122.04 222.472C1223.24 83.3404 1324.43 63.166 1425.54 143.221C1546.43 238.869 1606.47 333.391 1606.47 333.391" stroke="#124082" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-173.383 459.1C-167.596 457.251 109.622 446.561 228.981 220.623C348.34 -5.39519 646.938 -82.6369 655.297 222.793C667.675 674.348 910.17 555.391 1047.21 322.138C1071.24 281.468 1094.63 245.54 1117.38 214.273C1222.51 70.0782 1324.35 48.457 1427.39 132.37C1550.61 233.483 1610.01 331.382 1610.01 331.382" stroke="#114D9C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-175.151 456.367C-169.445 454.358 106.407 444.793 225.525 214.917C344.723 -14.8794 648.385 -94.6127 648.787 217.087C649.51 687.288 901.892 560.294 1041.42 317.155C1065.78 274.958 1089.49 237.985 1112.64 206.156C1221.71 56.8967 1324.51 33.5072 1429.16 121.519C1555.03 227.857 1613.46 329.292 1613.46 329.292" stroke="#114D9C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                    <path d="M-177 453.634C-171.213 451.545 103.192 442.944 222.149 209.29C341.106 -24.2834 649.671 -106.749 642.356 211.46C631.104 700.149 893.693 565.116 1035.64 312.172C1177.66 59.308 1302.33 -0.733085 1430.93 110.749C1559.45 222.151 1617 327.202 1617 327.202" stroke="#114D9C" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="1 17" />
                </g>
            </svg>
        </div>
    </section>
    <section class="why">
        <div class="wrap">
            <h2 class="title tac">
                Why we are better
            </h2>
            <div class="table">
                <div class="table__header row">
                    <div class="col"></div>
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/docket.png" alt="">
                    </div>
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/inszoom.png" alt="">
                    </div>
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/visasai.png" alt="">
                    </div>
                </div>
                <div class="rows">
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            10
                        </div>
                        <div class="col">
                            20
                        </div>
                        <div class="col">
                            30
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            —
                        </div>
                        <div class="col">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table mobile">
                <div class="table__header row">
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/docket.png" alt="">
                    </div>
                </div>
                <div class="rows">
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table mobile">
                <div class="table__header row">
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/docket.png" alt="">
                    </div>
                </div>
                <div class="rows">
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table mobile">
                <div class="table__header row">
                    <div class="col">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/docket.png" alt="">
                    </div>
                </div>
                <div class="rows">
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Tech requirements
                        </div>
                        <div class="col">

                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.83331 12L11.1666 14.3333L15.8333 9.66667M22.8333 12C22.8333 17.799 18.1323 22.5 12.3333 22.5C6.53432 22.5 1.83331 17.799 1.83331 12C1.83331 6.20101 6.53432 1.5 12.3333 1.5C18.1323 1.5 22.8333 6.20101 22.8333 12Z" stroke="#74B54A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="use">
        <div class="wrap">
            <h2 class="title tac">
                Use Case
            </h2>
            <div class="use__content">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/case.png" alt="">
                <div class="use__text">
                    <div class="use__items">
                        <div class="use__item">
                            <div class="use__name">
                                Approval Rate
                            </div>
                            <div class="use__val">
                                98%
                            </div>
                        </div>
                        <div class="use__item">
                            <div class="use__name">
                                H-1B Visas in one day
                            </div>
                            <div class="use__val">
                                70
                            </div>
                        </div>
                        <div class="use__item">
                            <div class="use__name">
                                H-1B Visas in one month
                            </div>
                            <div class="use__val">
                                460
                            </div>
                        </div>
                    </div>
                    <span>
                        1 law firm, one lawyer + Visas.AI's technology
                    </span>
                    <a href="/">
                        Read the story
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 6.75H9.645L6.9225 10.02C6.6574 10.3389 6.70106 10.8124 7.02 11.0775C7.33894 11.3426 7.8124 11.2989 8.0775 10.98L11.8275 6.48C11.8527 6.44421 11.8753 6.40661 11.895 6.3675C11.895 6.33 11.9325 6.3075 11.9475 6.27C11.9815 6.18401 11.9993 6.09247 12 6V6C11.9993 5.90753 11.9815 5.81599 11.9475 5.73C11.9475 5.6925 11.91 5.67 11.895 5.6325C11.8753 5.59339 11.8527 5.55579 11.8275 5.52L8.0775 1.02V1.02C7.93473 0.848596 7.72307 0.749638 7.5 0.750001V0.750001C7.32476 0.749659 7.15493 0.810691 7.02 0.922501L7.02 0.922502C6.70112 1.18687 6.65693 1.65968 6.9213 1.97856C6.9217 1.97904 6.9221 1.97952 6.9225 1.98L9.645 5.25H0.75C0.335786 5.25 0 5.58579 0 6C1.81058e-08 6.41422 0.335786 6.75 0.75 6.75L0.75 6.75Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="more">
        <div class="wrap">
            <h2 class="title tac">
                More than forms and a cover letter
            </h2>
            <h4 class="text">
                Visas.AI recommends ever-growing strategies to immigration lawyers, and builds legal briefs, other
                documents and forms—That increase approval ratings and makes you a better and faster attorney.
            </h4>
            <div class="more__items">
                <div class="more__item">
                    <div class="more__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.475 17.7983C11.475 17.6243 11.4059 17.4574 11.2828 17.3343C11.1597 17.2112 10.9928 17.1421 10.8187 17.1421C8.88482 17.1448 7.03089 17.9143 5.66358 19.282C4.29626 20.6497 3.52717 22.5038 3.52499 24.4377C3.52499 24.5239 3.54197 24.6092 3.57494 24.6888C3.60792 24.7685 3.65626 24.8408 3.7172 24.9017C3.77814 24.9627 3.85048 25.011 3.9301 25.044C4.00972 25.077 4.09506 25.094 4.18124 25.094C4.26742 25.094 4.35276 25.077 4.43238 25.044C4.512 25.011 4.58434 24.9627 4.64528 24.9017C4.70622 24.8408 4.75456 24.7685 4.78754 24.6888C4.82052 24.6092 4.83749 24.5239 4.83749 24.4377C4.83928 22.8517 5.47001 21.3311 6.59135 20.2095C7.71269 19.0879 9.2331 18.4568 10.8191 18.4546C10.9931 18.4545 11.1599 18.3853 11.2829 18.2622C11.4059 18.1392 11.475 17.9723 11.475 17.7983Z" fill="#0080FF" />
                            <path d="M17.1795 3.77708C16.1698 3.77827 15.2018 4.17991 14.4878 4.89388C13.7738 5.60786 13.3722 6.57587 13.371 7.58558C13.371 7.75963 13.4401 7.92655 13.5632 8.04962C13.6863 8.17269 13.8532 8.24183 14.0272 8.24183C14.2013 8.24183 14.3682 8.17269 14.4913 8.04962C14.6144 7.92655 14.6835 7.75963 14.6835 7.58558C14.6835 6.92355 14.9465 6.28864 15.4146 5.82051C15.8827 5.35239 16.5177 5.0894 17.1797 5.0894C17.8417 5.0894 18.4766 5.35239 18.9447 5.82051C19.4129 6.28864 19.6759 6.92355 19.6759 7.58558C19.6759 7.75963 19.745 7.92655 19.8681 8.04962C19.9911 8.17269 20.1581 8.24183 20.3321 8.24183C20.5062 8.24183 20.6731 8.17269 20.7962 8.04962C20.9192 7.92655 20.9884 7.75963 20.9884 7.58558C20.9872 6.57581 20.5855 5.60773 19.8714 4.89375C19.1574 4.17976 18.1893 3.77817 17.1795 3.77708Z" fill="#0080FF" />
                            <path d="M13.4539 13.3711H13.7351C14.5911 13.372 15.4117 13.7124 16.0169 14.3176C16.6222 14.9229 16.9626 15.7435 16.9635 16.5995V18.7208C16.9626 19.5768 16.6222 20.3974 16.0169 21.0027C15.4117 21.6079 14.5911 21.9483 13.7351 21.9492C13.5611 21.9492 13.3941 22.0183 13.2711 22.1414C13.148 22.2645 13.0789 22.4314 13.0789 22.6055C13.0789 22.7795 13.148 22.9464 13.2711 23.0695C13.3941 23.1926 13.5611 23.2617 13.7351 23.2617C14.939 23.2603 16.0932 22.7815 16.9445 21.9302C17.7957 21.0789 18.2746 19.9247 18.276 18.7208V16.5995C18.2746 15.3956 17.7957 14.2414 16.9445 13.3901C16.0932 12.5388 14.939 12.06 13.7351 12.0586H13.4539C13.2798 12.0586 13.1129 12.1277 12.9898 12.2508C12.8668 12.3739 12.7976 12.5408 12.7976 12.7148C12.7976 12.8889 12.8668 13.0558 12.9898 13.1789C13.1129 13.3019 13.2798 13.3711 13.4539 13.3711Z" fill="#0080FF" />
                            <path d="M17.625 29.8711C17.799 29.8711 17.966 29.8019 18.089 29.6789C18.2121 29.5558 18.2812 29.3889 18.2812 29.2148C18.2812 29.0408 18.2121 28.8739 18.089 28.7508C17.966 28.6277 17.799 28.5586 17.625 28.5586H13.875C12.8683 28.5575 11.9032 28.1571 11.1914 27.4453C10.4796 26.7335 10.0792 25.7684 10.0781 24.7617C10.0781 24.5877 10.009 24.4207 9.8859 24.2977C9.76283 24.1746 9.59591 24.1055 9.42187 24.1055C9.24782 24.1055 9.0809 24.1746 8.95783 24.2977C8.83476 24.4207 8.76562 24.5877 8.76562 24.7617C8.7672 26.1163 9.30602 27.415 10.2639 28.3728C11.2217 29.3307 12.5204 29.8695 13.875 29.8711H17.625Z" fill="#0080FF" />
                            <path d="M20.0156 37.6523C18.7728 37.6509 17.5814 37.1566 16.7026 36.2779C15.8238 35.3991 15.3295 34.2076 15.3281 32.9648C15.3281 32.7908 15.259 32.6239 15.1359 32.5008C15.0128 32.3777 14.8459 32.3086 14.6719 32.3086C14.4978 32.3086 14.3309 32.3777 14.2078 32.5008C14.0848 32.6239 14.0156 32.7908 14.0156 32.9648C14.0174 34.5556 14.6501 36.0807 15.775 37.2055C16.8998 38.3303 18.4249 38.963 20.0156 38.9648C20.1897 38.9648 20.3566 38.8957 20.4797 38.7726C20.6027 38.6496 20.6719 38.4826 20.6719 38.3086C20.6719 38.1345 20.6027 37.9676 20.4797 37.8445C20.3566 37.7215 20.1897 37.6523 20.0156 37.6523Z" fill="#0080FF" />
                            <path d="M10.7044 36.2862C10.1784 36.2069 9.70535 35.9222 9.389 35.4945C9.07266 35.0669 8.93883 34.5312 9.01686 34.0051C9.03088 33.9193 9.02772 33.8316 9.00757 33.7471C8.98742 33.6625 8.95068 33.5828 8.89948 33.5126C8.84829 33.4424 8.78365 33.383 8.70933 33.338C8.635 33.293 8.55247 33.2631 8.46653 33.2502C8.38058 33.2374 8.29293 33.2417 8.20867 33.2629C8.1244 33.2842 8.0452 33.322 7.97565 33.3741C7.90611 33.4262 7.84761 33.4916 7.80355 33.5665C7.75949 33.6414 7.73075 33.7244 7.71899 33.8105C7.58978 34.6809 7.81106 35.567 8.3343 36.2745C8.85754 36.982 9.64002 37.4531 10.5101 37.5845C10.5425 37.5892 10.5752 37.5915 10.608 37.5916C10.7737 37.5916 10.9332 37.5289 11.0546 37.4161C11.176 37.3034 11.2502 37.1489 11.2624 36.9837C11.2746 36.8184 11.2238 36.6547 11.1203 36.5253C11.0168 36.396 10.8682 36.3106 10.7044 36.2862Z" fill="#0080FF" />
                            <path d="M17.3437 43.2166C16.5981 43.2158 15.8832 42.9192 15.3559 42.3919C14.8286 41.8647 14.532 41.1498 14.5312 40.4041C14.5312 40.23 14.4621 40.0631 14.339 39.94C14.216 39.817 14.049 39.7478 13.875 39.7478C13.7009 39.7478 13.534 39.817 13.411 39.94C13.2879 40.0631 13.2187 40.23 13.2187 40.4041C13.2199 41.4977 13.6549 42.5463 14.4282 43.3196C15.2016 44.0929 16.2501 44.5279 17.3437 44.5291C17.5178 44.5291 17.6847 44.4599 17.8078 44.3369C17.9309 44.2138 18 44.0469 18 43.8728C18 43.6988 17.9309 43.5319 17.8078 43.4088C17.6847 43.2857 17.5178 43.2166 17.3437 43.2166Z" fill="#0080FF" />
                            <path d="M45.3982 26.4023C44.9364 26.4028 44.4832 26.5271 44.0857 26.7623L35.5732 18.2498C35.4502 18.1267 35.2834 18.0575 35.1094 18.0575H24.6562V13.9962H42.8839C43.0435 14.6085 43.4207 15.1416 43.945 15.4958C44.4693 15.85 45.1047 16.001 45.7323 15.9206C46.3599 15.8401 46.9367 15.5337 47.3547 15.0587C47.7727 14.5837 48.0032 13.9727 48.0032 13.34C48.0032 12.7072 47.7727 12.0962 47.3547 11.6212C46.9367 11.1462 46.3599 10.8398 45.7323 10.7593C45.1047 10.6789 44.4693 10.8299 43.945 11.1841C43.4207 11.5383 43.0435 12.0714 42.8839 12.6837H24.6562V9.74633H35.1094C35.2834 9.74625 35.4502 9.67705 35.5732 9.55396L38.3857 6.74146C38.9481 7.03417 39.5978 7.11191 40.2133 6.96012C40.8289 6.80834 41.368 6.43743 41.7298 5.91684C42.0915 5.39625 42.2512 4.76165 42.1789 4.13183C42.1065 3.50201 41.8071 2.92015 41.3367 2.49515C40.8663 2.07016 40.2571 1.83116 39.6232 1.8229C38.9893 1.81465 38.3741 2.03769 37.8928 2.45029C37.4115 2.86289 37.097 3.43676 37.0083 4.06448C36.9196 4.6922 37.0626 5.33074 37.4107 5.86058L34.8375 8.43383H24.6562V7.44158C24.6548 5.50972 23.9058 3.65338 22.5659 2.26161C21.2261 0.869848 19.3996 0.0506959 17.4692 -0.0241642C15.5388 -0.0990243 13.6543 0.576219 12.2108 1.86005C10.7672 3.14388 9.87661 4.93663 9.72561 6.86258C8.18902 7.08837 6.78487 7.85922 5.76948 9.0344C4.75408 10.2096 4.19516 11.7107 4.19474 13.2638C4.19402 14.0526 4.33948 14.8347 4.62374 15.5705C3.21697 16.5531 2.06412 17.8563 1.26038 19.3724C0.456635 20.8885 0.0250586 22.574 0.00128283 24.2898C-0.022493 26.0057 0.362214 27.7025 1.12364 29.2403C1.88506 30.7781 3.00136 32.1127 4.38037 33.134C4.16615 34.0089 4.13713 34.9189 4.29516 35.8057C4.45318 36.6926 4.79478 37.5366 5.29804 38.2836C5.80129 39.0307 6.45511 39.6644 7.21757 40.1441C7.98002 40.6237 8.8343 40.9387 9.72561 41.069C9.87662 42.995 10.7673 44.7878 12.2109 46.0716C13.6546 47.3554 15.5391 48.0306 17.4696 47.9557C19.4001 47.8807 21.2266 47.0614 22.5663 45.6695C23.9061 44.2776 24.655 42.4211 24.6562 40.4892V40.3722H31.8375L34.6342 43.9265C34.2644 44.4436 34.0957 45.0778 34.1599 45.7104C34.224 46.3429 34.5166 46.9304 34.9827 47.3628C35.4489 47.7952 36.0567 48.0428 36.6923 48.0592C37.3278 48.0757 37.9476 47.8599 38.4355 47.4522C38.9235 47.0446 39.246 46.473 39.3428 45.8447C39.4396 45.2163 39.3041 44.5741 38.9615 44.0385C38.6189 43.5029 38.0928 43.1106 37.4817 42.935C36.8707 42.7594 36.2165 42.8126 35.6419 43.0846L32.6719 39.3102C32.6105 39.2322 32.5322 39.1691 32.4429 39.1257C32.3535 39.0823 32.2555 39.0597 32.1562 39.0597H24.6562V35.1222H31.587C31.7466 35.7345 32.1238 36.2676 32.6481 36.6218C33.1724 36.976 33.8078 37.127 34.4354 37.0466C35.063 36.9661 35.6398 36.6597 36.0578 36.1847C36.4758 35.7097 36.7064 35.0987 36.7064 34.466C36.7064 33.8332 36.4758 33.2222 36.0578 32.7472C35.6398 32.2722 35.063 31.9658 34.4354 31.8853C33.8078 31.8049 33.1724 31.9559 32.6481 32.3101C32.1238 32.6643 31.7466 33.1974 31.587 33.8097H24.6562V29.8722H35.7116C35.8712 30.4845 36.2485 31.0176 36.7728 31.3718C37.2971 31.726 37.9325 31.877 38.5601 31.7966C39.1876 31.7161 39.7644 31.4097 40.1824 30.9347C40.6004 30.4597 40.831 29.8487 40.831 29.216C40.831 28.5832 40.6004 27.9722 40.1824 27.4972C39.7644 27.0222 39.1876 26.7158 38.5601 26.6353C37.9325 26.5549 37.2971 26.7059 36.7728 27.0601C36.2485 27.4143 35.8712 27.9474 35.7116 28.5597H24.6562V24.6222H28.6009C28.7755 25.2304 29.1658 25.7542 29.6987 26.0955C30.2316 26.4367 30.8706 26.5721 31.4962 26.4762C32.1217 26.3803 32.6908 26.0598 33.0971 25.5746C33.5033 25.0894 33.7188 24.4728 33.7033 23.8402C33.6877 23.2076 33.4422 22.6023 33.0126 22.1376C32.583 21.673 31.9988 21.3808 31.3694 21.3158C30.7399 21.2507 30.1083 21.4173 29.5928 21.7843C29.0773 22.1513 28.7132 22.6936 28.5686 23.3097H24.6562V19.3722H34.8375L43.1569 27.6912C42.8678 28.1858 42.7503 28.762 42.8225 29.3303C42.8947 29.8985 43.1527 30.427 43.5562 30.8336C43.9598 31.2402 44.4863 31.502 45.054 31.5785C45.6218 31.6549 46.1988 31.5417 46.6956 31.2563C47.1923 30.971 47.5808 30.5296 47.8008 30.0006C48.0207 29.4717 48.0598 28.8849 47.9119 28.3315C47.764 27.7781 47.4374 27.289 46.9829 26.9404C46.5284 26.5917 45.9715 26.4029 45.3986 26.4035L45.3982 26.4023ZM45.3982 12.0507C45.6532 12.0506 45.9025 12.1262 46.1146 12.2678C46.3267 12.4094 46.492 12.6108 46.5896 12.8463C46.6873 13.0819 46.7128 13.3411 46.6631 13.5912C46.6134 13.8414 46.4907 14.0711 46.3104 14.2515C46.1301 14.4318 45.9004 14.5546 45.6503 14.6044C45.4002 14.6542 45.1409 14.6287 44.9053 14.5311C44.6697 14.4335 44.4683 14.2683 44.3267 14.0563C44.185 13.8442 44.1094 13.595 44.1094 13.34C44.1097 12.9982 44.2455 12.6705 44.4872 12.4288C44.7288 12.1871 45.0565 12.0511 45.3982 12.0507ZM39.5857 3.14408C39.8407 3.14408 40.0898 3.21967 40.3018 3.3613C40.5138 3.50292 40.679 3.70422 40.7765 3.93973C40.8741 4.17524 40.8996 4.43439 40.8498 4.6844C40.8001 4.93442 40.6774 5.16408 40.4971 5.34433C40.3169 5.52458 40.0872 5.64734 39.8372 5.69707C39.5872 5.7468 39.328 5.72127 39.0925 5.62372C38.857 5.52617 38.6557 5.36097 38.5141 5.14902C38.3725 4.93706 38.2969 4.68787 38.2969 4.43296C38.2973 4.09125 38.4332 3.76365 38.6748 3.52202C38.9164 3.2804 39.244 3.14448 39.5857 3.14408ZM38.0389 45.4336C38.0389 45.6885 37.9633 45.9377 37.8216 46.1496C37.68 46.3616 37.4787 46.5268 37.2432 46.6243C37.0077 46.7219 36.7486 46.7474 36.4985 46.6977C36.2485 46.648 36.0189 46.5252 35.8386 46.345C35.6584 46.1647 35.5356 45.935 35.4859 45.685C35.4361 45.435 35.4617 45.1759 35.5592 44.9403C35.6568 44.7048 35.822 44.5035 36.0339 44.3619C36.2459 44.2203 36.4951 44.1447 36.75 44.1447C37.0917 44.1451 37.4193 44.281 37.6609 44.5226C37.9025 44.7643 38.0385 45.0919 38.0389 45.4336ZM34.1014 33.176C34.3564 33.1759 34.6057 33.2514 34.8178 33.3931C35.0299 33.5347 35.1952 33.7361 35.2928 33.9717C35.3904 34.2073 35.416 34.4665 35.3662 34.7166C35.3165 34.9668 35.1937 35.1965 35.0134 35.3768C34.833 35.5572 34.6033 35.68 34.3532 35.7297C34.103 35.7794 33.8438 35.7539 33.6082 35.6562C33.3726 35.5586 33.1712 35.3933 33.0296 35.1812C32.888 34.9692 32.8124 34.7199 32.8125 34.4648C32.8129 34.1231 32.9488 33.7955 33.1904 33.5539C33.4321 33.3123 33.7597 33.1764 34.1014 33.176ZM38.2264 27.926C38.4814 27.9259 38.7307 28.0014 38.9428 28.1431C39.1549 28.2847 39.3202 28.4861 39.4178 28.7217C39.5154 28.9573 39.541 29.2165 39.4912 29.4666C39.4415 29.7168 39.3187 29.9465 39.1384 30.1268C38.958 30.3072 38.7283 30.43 38.4782 30.4797C38.228 30.5294 37.9688 30.5039 37.7332 30.4062C37.4976 30.3086 37.2962 30.1433 37.1546 29.9312C37.013 29.7192 36.9374 29.4699 36.9375 29.2148C36.9379 28.8731 37.0738 28.5455 37.3154 28.3039C37.5571 28.0623 37.8847 27.9264 38.2264 27.926ZM31.0991 22.6126C31.3541 22.6125 31.6034 22.6881 31.8155 22.8297C32.0275 22.9713 32.1929 23.1726 32.2905 23.4082C32.3881 23.6438 32.4137 23.903 32.364 24.1531C32.3143 24.4032 32.1916 24.633 32.0113 24.8133C31.831 24.9937 31.6012 25.1165 31.3511 25.1663C31.101 25.2161 30.8418 25.1905 30.6062 25.093C30.3706 24.9954 30.1692 24.8302 30.0275 24.6181C29.8859 24.4061 29.8102 24.1568 29.8102 23.9018C29.8105 23.5601 29.9464 23.2324 30.188 22.9907C30.4297 22.749 30.7573 22.613 31.0991 22.6126ZM23.3437 40.4885C23.3331 42.1151 22.68 43.6715 21.5268 44.8186C20.3735 45.9658 18.8136 46.6106 17.1869 46.6125C15.5603 46.6144 13.9988 45.9733 12.8429 44.8289C11.6869 43.6846 11.0301 42.1296 11.0156 40.5031C11.0156 40.4926 11.0156 40.4813 11.0156 40.4727C11.0157 40.3047 10.9512 40.143 10.8356 40.021C10.72 39.8991 10.562 39.8261 10.3942 39.8172C9.60349 39.7764 8.83277 39.5539 8.14189 39.1671C7.45101 38.7802 6.85856 38.2394 6.41049 37.5866C5.96243 36.9337 5.6708 36.1864 5.55825 35.4027C5.4457 34.6189 5.51524 33.8198 5.76149 33.0672C5.80565 32.9317 5.80447 32.7855 5.75812 32.6507C5.71178 32.5159 5.62278 32.3999 5.50462 32.3202C4.18957 31.4338 3.11715 30.2326 2.38502 28.8258C1.6529 27.4191 1.28433 25.8515 1.31288 24.2659C1.34143 22.6803 1.7662 21.127 2.54849 19.7475C3.33079 18.368 4.44576 17.2061 5.79187 16.3677C5.92959 16.2818 6.03058 16.1479 6.07532 15.9918C6.12006 15.8358 6.10538 15.6687 6.03411 15.5228C5.65865 14.7577 5.47899 13.9114 5.51124 13.0597C5.54349 12.2081 5.78665 11.3778 6.2189 10.6432C6.65115 9.90872 7.25897 9.29299 7.98784 8.85129C8.71671 8.40958 9.54382 8.15571 10.395 8.11246C10.5628 8.10353 10.7208 8.03057 10.8364 7.90861C10.952 7.78666 11.0164 7.625 11.0164 7.45696C11.0164 7.44871 11.0164 7.43783 11.0164 7.42696C11.0308 5.8004 11.6875 4.24547 12.8435 3.10105C13.9994 1.95664 15.5609 1.3155 17.1875 1.31738C18.8141 1.31926 20.3741 1.964 21.5274 3.11109C22.6807 4.25818 23.3338 5.81462 23.3445 7.44121L23.3437 40.4885ZM45.3982 30.2933C45.1432 30.2933 44.894 30.2177 44.6819 30.076C44.4699 29.9343 44.3047 29.733 44.2071 29.4974C44.1095 29.2618 44.084 29.0025 44.1338 28.7524C44.1836 28.5023 44.3064 28.2726 44.4867 28.0923C44.6671 27.912 44.8968 27.7893 45.1469 27.7396C45.3971 27.6899 45.6563 27.7154 45.8919 27.8131C46.1274 27.9107 46.3288 28.076 46.4704 28.2881C46.612 28.5002 46.6876 28.7495 46.6875 29.0045C46.687 29.3462 46.551 29.6737 46.3093 29.9153C46.0676 30.1568 45.7399 30.293 45.3982 30.2933Z" fill="#0080FF" />
                            <path d="M43.4531 16.9336C42.9385 16.9335 42.4355 17.086 42.0076 17.3719C41.5797 17.6577 41.2461 18.064 41.0491 18.5394C40.8522 19.0148 40.8006 19.538 40.9009 20.0427C41.0013 20.5474 41.2491 21.011 41.6129 21.3749C41.9767 21.7388 42.4403 21.9866 42.945 22.0871C43.4497 22.1875 43.9729 22.136 44.4483 21.9391C44.9237 21.7422 45.3301 21.4087 45.616 20.9808C45.9019 20.553 46.0545 20.0499 46.0545 19.5353C46.0537 18.8456 45.7794 18.1844 45.2917 17.6966C44.804 17.2089 44.1428 16.9345 43.4531 16.9336ZM43.4531 20.8242C43.1981 20.8243 42.9488 20.7487 42.7367 20.6071C42.5246 20.4655 42.3593 20.2641 42.2617 20.0285C42.1641 19.7929 42.1385 19.5337 42.1882 19.2835C42.238 19.0334 42.3608 18.8036 42.5411 18.6233C42.7214 18.443 42.9512 18.3202 43.2013 18.2705C43.4514 18.2207 43.7107 18.2463 43.9463 18.3439C44.1819 18.4415 44.3832 18.6068 44.5249 18.8189C44.6665 19.031 44.7421 19.2803 44.742 19.5353C44.7416 19.877 44.6057 20.2046 44.364 20.4463C44.1224 20.6879 43.7948 20.8238 43.4531 20.8242Z" fill="#0080FF" />
                            <path d="M43.4531 34.7652C42.9385 34.7651 42.4355 34.9177 42.0076 35.2035C41.5797 35.4893 41.2461 35.8956 41.0491 36.371C40.8522 36.8465 40.8006 37.3696 40.9009 37.8743C41.0013 38.379 41.2491 38.8426 41.6129 39.2065C41.9767 39.5704 42.4403 39.8183 42.945 39.9187C43.4497 40.0191 43.9729 39.9676 44.4483 39.7707C44.9237 39.5738 45.3301 39.2403 45.616 38.8125C45.9019 38.3846 46.0545 37.8815 46.0545 37.367C46.0537 36.6772 45.7794 36.016 45.2917 35.5282C44.804 35.0405 44.1428 34.7661 43.4531 34.7652ZM43.4531 38.6558C43.1981 38.6559 42.9488 38.5804 42.7367 38.4387C42.5247 38.2971 42.3594 38.0958 42.2617 37.8602C42.1641 37.6246 42.1385 37.3654 42.1882 37.1153C42.2379 36.8652 42.3607 36.6354 42.541 36.4551C42.7213 36.2747 42.951 36.1519 43.2011 36.1021C43.4512 36.0524 43.7104 36.0779 43.946 36.1754C44.1816 36.273 44.383 36.4382 44.5247 36.6503C44.6664 36.8623 44.742 37.1116 44.742 37.3666C44.7417 37.7084 44.6058 38.036 44.3642 38.2778C44.1226 38.5195 43.7949 38.6554 43.4531 38.6558Z" fill="#0080FF" />
                        </svg>
                    </div>
                    <div class="more__name">
                        AI-Powered Intelligence
                    </div>
                    <div class="more__descr">
                        Ovie (our AI powered guide) helps you create the best strategies and build cases with
                        authoritative briefs and support documents, not just forms.
                    </div>
                    <a href="/">
                        Link
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 6.75H9.645L6.9225 10.02C6.6574 10.3389 6.70106 10.8124 7.02 11.0775C7.33894 11.3426 7.8124 11.2989 8.0775 10.98L11.8275 6.48C11.8527 6.44421 11.8753 6.40661 11.895 6.3675C11.895 6.33 11.9325 6.3075 11.9475 6.27C11.9815 6.18401 11.9993 6.09247 12 6V6C11.9993 5.90753 11.9815 5.81599 11.9475 5.73C11.9475 5.6925 11.91 5.67 11.895 5.6325C11.8753 5.59339 11.8527 5.55579 11.8275 5.52L8.0775 1.02V1.02C7.93473 0.848596 7.72307 0.749638 7.5 0.750001V0.750001C7.32476 0.749659 7.15493 0.810691 7.02 0.922501L7.02 0.922502C6.70112 1.18687 6.65693 1.65968 6.9213 1.97856C6.9217 1.97904 6.9221 1.97952 6.9225 1.98L9.645 5.25H0.75C0.335786 5.25 0 5.58579 0 6C1.81058e-08 6.41422 0.335786 6.75 0.75 6.75L0.75 6.75Z" fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="more__item">
                    <div class="more__icon">
                        <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M39.7485 9.96304H37.8521V8.06629C37.8515 7.59405 37.6637 7.14133 37.3297 6.80741C36.9958 6.47349 36.5431 6.28563 36.0709 6.28504H34.1696V4.38379C34.1691 3.91152 33.9813 3.45874 33.6474 3.1248C33.3134 2.79086 32.8606 2.60304 32.3884 2.60254H8.91711C8.44485 2.60304 7.99207 2.79086 7.65813 3.1248C7.32419 3.45874 7.13636 3.91152 7.13586 4.38379V36.255C7.13636 36.7273 7.32419 37.1801 7.65813 37.514C7.99207 37.848 8.44485 38.0358 8.91711 38.0363H10.8146V39.9338C10.8152 40.406 11.0031 40.8587 11.337 41.1927C11.6709 41.5266 12.1236 41.7144 12.5959 41.715H14.496V43.6152C14.4965 44.0874 14.6843 44.5402 15.0183 44.8741C15.3522 45.2081 15.805 45.3959 16.2772 45.3964H39.7485C40.2208 45.3959 40.6735 45.2081 41.0075 44.8741C41.3414 44.5402 41.5292 44.0874 41.5297 43.6152V11.7443C41.5292 11.272 41.3414 10.8192 41.0075 10.4853C40.6735 10.1514 40.2208 9.96354 39.7485 9.96304ZM8.91711 36.7238C8.79279 36.7238 8.67357 36.6744 8.58566 36.5865C8.49775 36.4986 8.44836 36.3794 8.44836 36.255V4.38379C8.44992 4.25995 8.4998 4.14163 8.58738 4.05405C8.67495 3.96648 8.79328 3.91659 8.91711 3.91504H32.3884C32.5127 3.91514 32.6318 3.96456 32.7197 4.05244C32.8076 4.14033 32.857 4.2595 32.8571 4.38379V6.28504H12.5959C12.1236 6.28563 11.6709 6.47349 11.337 6.80741C11.0031 7.14133 10.8152 7.59405 10.8146 8.06629V36.7238H8.91711ZM12.5959 40.4025C12.4716 40.4024 12.3524 40.353 12.2645 40.2651C12.1766 40.1772 12.1272 40.0581 12.1271 39.9338V8.06629C12.1272 7.942 12.1766 7.82283 12.2645 7.73494C12.3524 7.64706 12.4716 7.59764 12.5959 7.59754H36.0709C36.1952 7.59764 36.3143 7.64706 36.4022 7.73494C36.4901 7.82283 36.5395 7.942 36.5396 8.06629V9.96304H16.2772C15.805 9.96354 15.3522 10.1514 15.0183 10.4853C14.6843 10.8192 14.4965 11.272 14.496 11.7443V40.4025H12.5959ZM40.2172 43.6152C40.2171 43.7395 40.1677 43.8586 40.0798 43.9465C39.992 44.0344 39.8728 44.0838 39.7485 44.0839H16.2772C16.1529 44.0838 16.0338 44.0344 15.9459 43.9465C15.858 43.8586 15.8086 43.7395 15.8085 43.6152V41.0697C15.8085 41.0659 15.8085 41.0625 15.8085 41.0588C15.8085 41.055 15.8085 41.0517 15.8085 41.0479V11.7443C15.8085 11.62 15.8579 11.5007 15.9458 11.4128C16.0337 11.3249 16.1529 11.2755 16.2772 11.2755H39.7485C39.8728 11.2755 39.992 11.3249 40.0799 11.4128C40.1679 11.5007 40.2172 11.62 40.2172 11.7443V43.6152Z" fill="#0080FF" />
                            <path d="M36.4931 13.9324H19.5334C19.3593 13.9324 19.1924 14.0016 19.0693 14.1246C18.9463 14.2477 18.8771 14.4146 18.8771 14.5887C18.8771 14.7627 18.9463 14.9296 19.0693 15.0527C19.1924 15.1758 19.3593 15.2449 19.5334 15.2449H36.4931C36.6672 15.2449 36.8341 15.1758 36.9572 15.0527C37.0802 14.9296 37.1494 14.7627 37.1494 14.5887C37.1494 14.4146 37.0802 14.2477 36.9572 14.1246C36.8341 14.0016 36.6672 13.9324 36.4931 13.9324Z" fill="#0080FF" />
                            <path d="M36.4931 19.1689H19.5334C19.3593 19.1689 19.1924 19.2381 19.0693 19.3611C18.9463 19.4842 18.8771 19.6511 18.8771 19.8252C18.8771 19.9992 18.9463 20.1661 19.0693 20.2892C19.1924 20.4123 19.3593 20.4814 19.5334 20.4814H36.4931C36.6672 20.4814 36.8341 20.4123 36.9572 20.2892C37.0802 20.1661 37.1494 19.9992 37.1494 19.8252C37.1494 19.6511 37.0802 19.4842 36.9572 19.3611C36.8341 19.2381 36.6672 19.1689 36.4931 19.1689Z" fill="#0080FF" />
                            <path d="M36.4931 24.4054H19.5334C19.3593 24.4054 19.1924 24.4746 19.0693 24.5976C18.9463 24.7207 18.8771 24.8876 18.8771 25.0617C18.8771 25.2357 18.9463 25.4026 19.0693 25.5257C19.1924 25.6488 19.3593 25.7179 19.5334 25.7179H36.4931C36.6672 25.7179 36.8341 25.6488 36.9572 25.5257C37.0802 25.4026 37.1494 25.2357 37.1494 25.0617C37.1494 24.8876 37.0802 24.7207 36.9572 24.5976C36.8341 24.4746 36.6672 24.4054 36.4931 24.4054Z" fill="#0080FF" />
                            <path d="M36.4931 29.6415H19.5334C19.4472 29.6415 19.3618 29.6585 19.2822 29.6915C19.2026 29.7245 19.1303 29.7728 19.0693 29.8338C19.0084 29.8947 18.96 29.967 18.9271 30.0467C18.8941 30.1263 18.8771 30.2116 18.8771 30.2978C18.8771 30.384 18.8941 30.4693 18.9271 30.5489C18.96 30.6285 19.0084 30.7009 19.0693 30.7618C19.1303 30.8228 19.2026 30.8711 19.2822 30.9041C19.3618 30.9371 19.4472 30.954 19.5334 30.954H36.4931C36.6672 30.954 36.8341 30.8849 36.9572 30.7618C37.0802 30.6388 37.1494 30.4718 37.1494 30.2978C37.1494 30.1237 37.0802 29.9568 36.9572 29.8338C36.8341 29.7107 36.6672 29.6415 36.4931 29.6415Z" fill="#0080FF" />
                            <path d="M36.4931 34.878H19.5334C19.3593 34.878 19.1924 34.9472 19.0693 35.0703C18.9463 35.1933 18.8771 35.3602 18.8771 35.5343C18.8771 35.7083 18.9463 35.8753 19.0693 35.9983C19.1924 36.1214 19.3593 36.1905 19.5334 36.1905H36.4931C36.6672 36.1905 36.8341 36.1214 36.9572 35.9983C37.0802 35.8753 37.1494 35.7083 37.1494 35.5343C37.1494 35.3602 37.0802 35.1933 36.9572 35.0703C36.8341 34.9472 36.6672 34.878 36.4931 34.878Z" fill="#0080FF" />
                            <path d="M36.4931 40.1142H19.5334C19.3593 40.1142 19.1924 40.1833 19.0693 40.3064C18.9463 40.4294 18.8771 40.5964 18.8771 40.7704C18.8771 40.9445 18.9463 41.1114 19.0693 41.2345C19.1924 41.3575 19.3593 41.4267 19.5334 41.4267H36.4931C36.6672 41.4267 36.8341 41.3575 36.9572 41.2345C37.0802 41.1114 37.1494 40.9445 37.1494 40.7704C37.1494 40.5964 37.0802 40.4294 36.9572 40.3064C36.8341 40.1833 36.6672 40.1142 36.4931 40.1142Z" fill="#0080FF" />
                        </svg>

                    </div>
                    <div class="more__name">
                        Document Production
                    </div>
                    <div class="more__descr">
                        Build custom documents from library of business plans, briefs, expert affidavits, and more.
                        Drop in information and support with evidence from Winning Strategies and curated
                        recommendations from OVIE.
                    </div>
                    <a href="/">
                        Link
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 6.75H9.645L6.9225 10.02C6.6574 10.3389 6.70106 10.8124 7.02 11.0775C7.33894 11.3426 7.8124 11.2989 8.0775 10.98L11.8275 6.48C11.8527 6.44421 11.8753 6.40661 11.895 6.3675C11.895 6.33 11.9325 6.3075 11.9475 6.27C11.9815 6.18401 11.9993 6.09247 12 6V6C11.9993 5.90753 11.9815 5.81599 11.9475 5.73C11.9475 5.6925 11.91 5.67 11.895 5.6325C11.8753 5.59339 11.8527 5.55579 11.8275 5.52L8.0775 1.02V1.02C7.93473 0.848596 7.72307 0.749638 7.5 0.750001V0.750001C7.32476 0.749659 7.15493 0.810691 7.02 0.922501L7.02 0.922502C6.70112 1.18687 6.65693 1.65968 6.9213 1.97856C6.9217 1.97904 6.9221 1.97952 6.9225 1.98L9.645 5.25H0.75C0.335786 5.25 0 5.58579 0 6C1.81058e-08 6.41422 0.335786 6.75 0.75 6.75L0.75 6.75Z" fill="white" />
                        </svg>
                    </a>
                </div>
                <div class="more__item">
                    <div class="more__icon">
                        <svg width="32" height="44" viewBox="0 0 32 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.8167 18.8313H26.9879V11.4963C27.1109 5.41117 21.7574 0.0486661 15.6667 0.175041C12.6651 0.178317 9.78739 1.37214 7.66495 3.49458C5.54251 5.61701 4.34869 8.49472 4.34542 11.4963V18.8313H3.51666C2.63082 18.8323 1.78153 19.1846 1.15514 19.811C0.52875 20.4374 0.176408 21.2867 0.175415 22.1725V40.4838C0.176408 41.3696 0.52875 42.2189 1.15514 42.8453C1.78153 43.4717 2.63082 43.8241 3.51666 43.825H27.8167C28.7025 43.824 29.5517 43.4716 30.1781 42.8452C30.8044 42.2188 31.1568 41.3696 31.1579 40.4838V22.1725C31.1568 21.2867 30.8044 20.4375 30.1781 19.8111C29.5517 19.1848 28.7025 18.8324 27.8167 18.8313ZM5.65792 11.4963C5.66089 8.84272 6.71634 6.29868 8.5927 4.42232C10.4691 2.54596 13.0131 1.49052 15.6667 1.48754C21.0517 1.37504 25.7849 6.11617 25.6754 11.4963V18.8313H23.9879V11.4963C24.0783 7.02667 20.1415 3.08204 15.6667 3.17504C13.4605 3.17752 11.3454 4.05502 9.78539 5.61502C8.22539 7.17502 7.3479 9.29012 7.34542 11.4963V18.8313H5.65792V11.4963ZM8.65792 18.8313V11.4963C8.66 9.6381 9.39909 7.8566 10.713 6.54266C12.027 5.22871 13.8085 4.48962 15.6667 4.48754C19.435 4.40917 22.7519 7.73242 22.6754 11.4963V18.8313H8.65792ZM29.8454 40.4838C29.8448 41.0217 29.6309 41.5373 29.2505 41.9177C28.8702 42.298 28.3545 42.5119 27.8167 42.5125H3.51666C2.97879 42.5119 2.46311 42.298 2.08278 41.9177C1.70244 41.5373 1.48851 41.0217 1.48792 40.4838V22.1725C1.48851 21.6347 1.70244 21.119 2.08278 20.7387C2.46311 20.3583 2.97879 20.1444 3.51666 20.1438H27.8167C28.3545 20.1444 28.8702 20.3583 29.2505 20.7387C29.6309 21.119 29.8448 21.6347 29.8454 22.1725V40.4838Z" fill="#0080FF" />
                            <path d="M15.6667 24.0914C11.0849 24.1507 9.66179 30.2133 13.6979 32.3253V36.5977C13.6979 37.1198 13.9053 37.6206 14.2745 37.9898C14.6438 38.359 15.1445 38.5664 15.6667 38.5664C16.1888 38.5664 16.6896 38.359 17.0588 37.9898C17.428 37.6206 17.6354 37.1198 17.6354 36.5977V32.3253C21.6715 30.2148 20.2477 24.1492 15.6667 24.0914ZM16.7467 31.2854C16.6219 31.3326 16.5145 31.4167 16.4388 31.5266C16.3631 31.6364 16.3227 31.7667 16.3229 31.9V36.5988C16.3229 36.7728 16.2538 36.9398 16.1307 37.0628C16.0076 37.1859 15.8407 37.255 15.6667 37.255C15.4926 37.255 15.3257 37.1859 15.2026 37.0628C15.0796 36.9398 15.0104 36.7728 15.0104 36.5988V31.9C15.0104 31.7668 14.9699 31.6368 14.8942 31.5272C14.8185 31.4176 14.7112 31.3337 14.5867 31.2865C13.9211 31.0346 13.3651 30.5571 13.0154 29.9373C12.6657 29.3175 12.5445 28.5947 12.673 27.8948C12.8016 27.1948 13.1716 26.5622 13.7186 26.107C14.2656 25.6518 14.955 25.403 15.6667 25.4039C19.0342 25.4482 19.8667 30.052 16.7467 31.2854Z" fill="#0080FF" />
                        </svg>
                    </div>
                    <div class="more__name">
                        Data Security
                    </div>
                    <div class="more__descr">
                        Protect your clients’ case information and firm’s data with our industry-leading security.
                    </div>
                    <a href="/">
                        Link
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.75 6.75H9.645L6.9225 10.02C6.6574 10.3389 6.70106 10.8124 7.02 11.0775C7.33894 11.3426 7.8124 11.2989 8.0775 10.98L11.8275 6.48C11.8527 6.44421 11.8753 6.40661 11.895 6.3675C11.895 6.33 11.9325 6.3075 11.9475 6.27C11.9815 6.18401 11.9993 6.09247 12 6V6C11.9993 5.90753 11.9815 5.81599 11.9475 5.73C11.9475 5.6925 11.91 5.67 11.895 5.6325C11.8753 5.59339 11.8527 5.55579 11.8275 5.52L8.0775 1.02V1.02C7.93473 0.848596 7.72307 0.749638 7.5 0.750001V0.750001C7.32476 0.749659 7.15493 0.810691 7.02 0.922501L7.02 0.922502C6.70112 1.18687 6.65693 1.65968 6.9213 1.97856C6.9217 1.97904 6.9221 1.97952 6.9225 1.98L9.645 5.25H0.75C0.335786 5.25 0 5.58579 0 6C1.81058e-08 6.41422 0.335786 6.75 0.75 6.75L0.75 6.75Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="more__sup">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M45.3492 39.7772C50.3483 31.6739 47.8488 21.0307 39.7454 16.0316C38.0119 14.9834 36.1171 14.2174 34.1416 13.8143C32.2468 4.4612 23.1356 -1.54574 13.7825 0.349065C4.42944 2.24387 -1.53719 11.4357 0.357621 20.7485C0.760772 22.7239 1.52676 24.6187 2.57495 26.3523L0.0351004 33.609C-0.0858448 33.9718 0.11573 34.375 0.478566 34.4959C0.639826 34.5362 0.801086 34.5362 0.962347 34.4959L8.21906 31.9561C9.9526 33.0043 11.8474 33.7702 13.8228 34.1734C15.758 43.5265 24.8692 49.4931 34.2223 47.5983C36.1977 47.1952 38.0925 46.4292 39.8261 45.381L47.0828 47.9208C47.4456 48.0418 47.8488 47.8402 47.9697 47.4774C48.01 47.3161 48.01 47.1548 47.9697 46.9936L45.3492 39.7772ZM8.29969 30.4644C8.21906 30.4644 8.13843 30.4644 8.0578 30.5047L1.88959 32.6817L4.06661 26.5135C4.14724 26.312 4.10692 26.0701 3.98598 25.9088C-0.771201 18.5312 1.32518 8.69428 8.66252 3.93711C15.9999 -0.820071 25.8367 1.31663 30.5939 8.65397C35.3511 15.9913 33.2547 25.8282 25.877 30.5854C20.6361 33.9718 13.9035 33.9718 8.66252 30.5854C8.54158 30.5047 8.42063 30.4644 8.29969 30.4644ZM39.9067 43.8893C39.7051 43.8087 39.4632 43.849 39.302 43.97C31.9646 48.7271 22.1278 46.6308 17.4109 39.2934C16.4433 37.8018 15.7177 36.1488 15.3145 34.4153C24.7079 35.5441 33.2547 28.8115 34.4238 19.3778C34.5045 18.6924 34.5448 17.9667 34.5448 17.2411C34.5448 16.5557 34.5045 15.9107 34.4238 15.2656C42.9303 17.3217 48.1713 25.8685 46.1152 34.375C45.7121 36.1085 44.9864 37.7614 44.0188 39.2531C43.8979 39.4547 43.8576 39.6562 43.9382 39.8578L46.1152 46.026L39.9067 43.8893Z" fill="#0080FF" />
                    <path d="M10.8799 19.862H8.25944V13.9356C8.25944 13.5325 7.93692 13.21 7.53377 13.21C7.13062 13.21 6.8081 13.5325 6.8081 13.9356V20.5473C6.8081 20.9505 7.13062 21.273 7.53377 21.273H10.8396C11.2428 21.273 11.5653 20.9505 11.5653 20.5473C11.5653 20.1442 11.2428 19.862 10.8799 19.862Z" fill="#0080FF" />
                    <path d="M13.702 13.2502C13.2988 13.2502 12.9763 13.5727 12.9763 13.9759V20.5876C12.9763 20.9907 13.2988 21.3132 13.702 21.3132C14.1051 21.3132 14.4276 20.9907 14.4276 20.5876V13.9759C14.3873 13.5727 14.1051 13.2502 13.702 13.2502Z" fill="#0080FF" />
                    <path d="M21.0796 13.2898C20.7168 13.1688 20.3137 13.3704 20.1927 13.7332L18.7011 18.3292L17.2094 13.7332C17.0885 13.3704 16.6853 13.1688 16.3225 13.2898C15.9596 13.4107 15.7581 13.8139 15.879 14.1767L18.056 20.7884C18.1366 21.0706 18.4189 21.2722 18.7414 21.2722C19.0639 21.2722 19.3058 21.0706 19.4267 20.7884L21.6037 14.1767C21.6441 13.8139 21.4425 13.4107 21.0796 13.2898Z" fill="#0080FF" />
                    <path d="M27.0059 17.9665C27.409 17.9665 27.7316 17.644 27.7316 17.2408C27.7316 16.8377 27.409 16.5152 27.0059 16.5152H24.3854V14.6203H27.0059C27.409 14.6203 27.7316 14.2978 27.7316 13.8947C27.7316 13.4915 27.409 13.169 27.0059 13.169H23.7001C23.2969 13.169 22.9744 13.4915 22.9744 13.8947V20.5063C22.9744 20.9095 23.2969 21.232 23.7001 21.232H27.0059C27.409 21.232 27.7316 20.9095 27.7316 20.5063C27.7316 20.1032 27.409 19.7807 27.0059 19.7807H24.3854V17.8859H27.0059V17.9665Z" fill="#0080FF" />
                </svg>
                <div class="more__name">
                    24/7 Support
                </div>

                <h4 class="text">
                    Unlike the competition, we offer support everyday of the week because we want to set you up for
                    success!
                </h4>
            </div>
        </div>
    </section>
    <?php


    $articles = get_posts(array(
        'numberposts' => 4,
        'orderby'     => 'date',
        'category_name'    => 'blog',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true
    ));
    if (count($articles) > 0) :

        $arrayLength = count($articles);
        $i = 0;
    ?>
        <section class="blog">
            <div class="wrap">
                <h2 class="title">
                    Blog
                </h2>
                <div class="blog__items">

                    <?php
                    while ($i < $arrayLength) {
                    ?>
                        <a href="<?php echo get_post_permalink($articles[$i]->ID); ?>" class="blog__item">
                            <div class="blog__content">
                                <h3 class="title">
                                    <?php
                                    $text = $articles[$i]->post_title;
                                    if (strlen($text) > 55) {
                                        $text = substr($text, 0, 55) . '...';
                                    }
                                    echo $text;
                                    ?>
                                </h3>
                                <h4 class="text">
                                    <?php the_field('short_description', $articles[$i]->ID) ?>
                                </h4>
                                <div class="blog__tags">
                                    <?php

                                    $last_article_cats = wp_get_post_categories($articles[$i]->ID);
                                    $arrayTagsLength = count($last_article_cats);

                                    $j = 0;
                                    while ($j < $arrayTagsLength) {
                                        if ($last_article_cats[$j] != 3) :
                                            $color = get_field('category_color', 'category_' . $last_article_cats[$j]);
                                            $hex = $color;
                                            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                                    ?>
                                            <div class="blog__tag" style="color: <?php echo $color; ?>; background: rgba(<?php echo "$r , $g , $b"; ?>,.35);">
                                                <?php echo get_the_category_by_ID($last_article_cats[$j]); ?>
                                            </div>
                                    <?php
                                        endif;
                                        $j++;
                                    }
                                    ?>
                                </div>
                                <div class="blog__info">
                                    <div class="blog__author">
                                        <?php echo the_author_meta('user_nicename', $articles[$i]->post_author); ?>
                                    </div>
                                    •
                                    <div class="blog__date">
                                        <?php echo get_the_date('dS M Y', $articles[$i]->ID); ?>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php the_field('acticle_image', $articles[$i]->ID) ?>" alt="" class="blog__image">
                        </a>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
                <div class="swiper blog__slider">
                    <div class="swiper-wrapper">
                        <?php
                        $i = 0;
                        while ($i < $arrayLength) {
                        ?>
                            <a href="<?php echo get_post_permalink($articles[$i]->ID); ?>" class="swiper-slide blog__item">
                                <div class="blog__content">
                                    <h3 class="title">
                                        <?php echo $articles[$i]->post_title; ?>
                                    </h3>
                                    <h4 class="text">
                                        <?php the_field('acticle_descr', $articles[$i]->ID) ?>
                                    </h4>
                                    <div class="blog__tags">
                                        <?php

                                        $last_article_cats = wp_get_post_categories($articles[$i]->ID);
                                        $arrayTagsLength = count($last_article_cats);

                                        $j = 0;
                                        while ($j < $arrayTagsLength) {
                                            if ($last_article_cats[$j] != 3) :
                                                $color = get_field('category_color', 'category_' . $last_article_cats[$j]);
                                                $hex = $color;
                                                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                                        ?>
                                                <div class="blog__tag" style="color: <?php echo $color; ?>; background: rgba(<?php echo "$r , $g , $b"; ?>,.35);">
                                                    <?php echo get_the_category_by_ID($last_article_cats[$j]); ?>
                                                </div>
                                        <?php
                                            endif;
                                            $j++;
                                        }
                                        ?>
                                    </div>
                                    <div class="blog__info">
                                        <div class="blog__author">
                                            <?php echo the_author_meta('user_nicename', $articles[$i]->post_author); ?>
                                        </div>
                                        •
                                        <div class="blog__date">
                                            <?php echo get_the_date('dS M Y', $articles[$i]->ID); ?>
                                        </div>
                                    </div>
                                </div>
                                <img src="<?php the_field('acticle_image', $articles[$i]->ID) ?>" alt="" class="blog__image">
                            </a>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php
    endif;
    ?>


    <section class="demo">
        <div class="wrap">
            <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image/image_5-removebg 1.png" alt="">
                <div class="demo__content">
                    <h3 class="demo__name">
                        Book a Live Demo
                    </h3>
                    <h4 class="text">
                        Book a live demo to see how Visas.AI can help your law firm maximize efficiency and increase
                        revenue.
                    </h4>
                    <a href="/" class="btn btn_white">
                        Book a Demo
                    </a>
                </div>
            </div>
            <div class="right">
                <div class="demo__content">
                    <h3 class="demo__name">
                        Sign up for Visas.AI
                    </h3>
                    <h4 class="text">
                        Flexible pricing for every type of immigration attorney. Sign up now, upgrade anytime. Every
                        new account gets complimentary introduction training.
                    </h4>
                    <a href="/" class="btn btn_blue">
                        Sign Up Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<script src='https://unpkg.com/three@0.83.0'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/dat-gui/0.5.1/dat.gui.min.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/shaders/CopyShader.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/postprocessing/EffectComposer.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/postprocessing/RenderPass.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/postprocessing/ShaderPass.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/shaders/HorizontalBlurShader.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/shaders/VerticalBlurShader.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/shaders/FilmShader.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/shaders/LuminosityHighPassShader.js'></script>
<script src='https://unpkg.com/three@0.83.0/examples/js/postprocessing/UnrealBloomPass.js'></script>
<script src='https://cdn.rawgit.com/felixturner/bad-tv-shader/master/BadTVShader.js'></script>
<script>
    THREE.VolumetericLightShader = {
        uniforms: {
            tDiffuse: {
                value: null
            },
            lightPosition: {
                value: new THREE.Vector2(0.5, 0.5)
            },
            exposure: {
                value: 1
            },
            decay: {
                value: 1
            },
            density: {
                value: 50
            },
            weight: {
                value: 0.57
            },
            samples: {
                value: 30
            }
        },


        vertexShader: [
            "varying vec2 vUv;",
            "void main() {",
            "vUv = uv;",
            "gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);",
            "}"
        ].
        join("\n"),

        fragmentShader: [
            "varying vec2 vUv;",
            "uniform sampler2D tDiffuse;",
            "uniform vec2 lightPosition;",
            "uniform float exposure;",
            "uniform float decay;",
            "uniform float density;",
            "uniform float weight;",
            "uniform int samples;",
            "const int MAX_SAMPLES = 100;",
            "void main()",
            "{",
            "vec2 texCoord = vUv;",
            "vec2 deltaTextCoord = texCoord - lightPosition;",
            "deltaTextCoord *= 1.0 / float(samples) * density;",
            "vec4 color = texture2D(tDiffuse, texCoord);",
            "float illuminationDecay = 1.0;",
            "for(int i=0; i < MAX_SAMPLES; i++)",
            "{",
            "if(i == samples) {",
            "break;",
            "}",
            "texCoord += deltaTextCoord;",
            "vec4 sample = texture2D(tDiffuse, texCoord);",
            "sample *= illuminationDecay * weight;",
            "color += sample;",
            "illuminationDecay *= decay;",
            "}",
            "gl_FragColor = color * exposure;",
            "}"
        ].
        join("\n")
    };

    THREE.AdditiveBlendingShader = {
        uniforms: {
            tDiffuse: {
                value: null
            },
            tAdd: {
                value: null
            }
        },


        vertexShader: [
            "varying vec2 vUv;",
            "void main() {",
            "vUv = uv;",
            "gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);",
            "}"
        ].
        join("\n"),

        fragmentShader: [
            "uniform sampler2D tDiffuse;",
            "uniform sampler2D tAdd;",
            "varying vec2 vUv;",
            "void main() {",
            "vec4 color = texture2D(tDiffuse, vUv);",
            "vec4 add = texture2D(tAdd, vUv);",
            "gl_FragColor = color + add;",
            "}"
        ].
        join("\n")
    };

    THREE.PassThroughShader = {
        uniforms: {
            tDiffuse: {
                value: null
            }
        },


        vertexShader: [
            "varying vec2 vUv;",
            "void main() {",
            "vUv = uv;",
            "gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);",
            "}"
        ].
        join("\n"),

        fragmentShader: [
            "uniform sampler2D tDiffuse;",
            "varying vec2 vUv;",
            "void main() {",
            "gl_FragColor = texture2D(tDiffuse, vec2(vUv.x, vUv.y));",
            "}"
        ].
        join("\n")
    };


    const getImageTexture = (image, density = 1) => {
        const canvas = document.createElement('canvas');
        const ctx = canvas.getContext('2d');
        const {
            width,
            height
        } = image;

        canvas.setAttribute('width', width * density);
        canvas.setAttribute('height', height * density);
        canvas.style.width = `${width}px`;
        canvas.style.height = `${height}px`;

        ctx.drawImage(image, 0, 0, width * density, height * density);

        return canvas;
    };

    const width = 494;
    const height = 784;

    const lightColor = 0x0099ff;
    const DEFAULT_LAYER = 0;
    const OCCLUSION_LAYER = 1;
    const renderScale = 0.2;
    /* const gui = new dat.GUI(); */
    const clock = new THREE.Clock();

    let composer,
        filmPass,
        badTVPass,
        bloomPass,
        occlusionComposer,
        itemMesh,
        occMesh,
        occRenderTarget,
        lightSource,
        vlShaderUniforms;

    const scene = new THREE.Scene();
    scene.background = null;
    const camera = new THREE.PerspectiveCamera(75, width / height, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({
        alpha: true,
        antialias: false
    });

    renderer.setSize(width, height);
    document.body.appendChild(renderer.domElement);

    function setupScene() {
        lightSource = new THREE.Object3D();
        lightSource.position.x = 0;
        lightSource.position.y = -15;
        lightSource.position.z = -15;

        const itemGeo = new THREE.PlaneGeometry(4, 6);
        const itemMaterial = new THREE.MeshBasicMaterial({
            transparent: true,
            opacity: 0.7
        });

        const img = new Image();
        img.src = '<?php echo get_template_directory_uri(); ?>/assets/img/image/ovie.png';
        img.crossOrigin = 'Anonymous';

        img.onload = function() {
            const itemTexture = new THREE.Texture(
                getImageTexture(img),
                null,
                THREE.ClampToEdgeWrapping,
                THREE.ClampToEdgeWrapping,
                null,
                THREE.LinearFilter);


            itemTexture.needsUpdate = true;
            itemMaterial.map = itemTexture;

            itemMesh = new THREE.Mesh(itemGeo, itemMaterial);
            scene.add(itemMesh);

            const occItemMaterial = new THREE.MeshBasicMaterial({
                color: lightColor
            });
            occItemMaterial.map = itemTexture;
            occMesh = new THREE.Mesh(itemGeo, occItemMaterial);
            occMesh.layers.set(OCCLUSION_LAYER);
            scene.add(occMesh);
        };

        camera.position.z = 4.5;
    }

    function setupPostprocessing() {
        occRenderTarget = new THREE.WebGLRenderTarget(width * renderScale, height * renderScale);

        // Blur passes
        const hBlur = new THREE.ShaderPass(THREE.HorizontalBlurShader);
        const vBlur = new THREE.ShaderPass(THREE.VerticalBlurShader);
        const bluriness = 7;
        hBlur.uniforms.h.value = bluriness / width;
        vBlur.uniforms.v.value = bluriness / height;

        // Bad TV Pass
        badTVPass = new THREE.ShaderPass(THREE.BadTVShader);
        badTVPass.uniforms.distortion.value = 1;
        badTVPass.uniforms.distortion2.value = 0.8;
        badTVPass.uniforms.speed.value = 0.2;
        badTVPass.uniforms.rollSpeed.value = 0;

        // Volumetric Light Pass
        const vlPass = new THREE.ShaderPass(THREE.VolumetericLightShader);
        vlShaderUniforms = vlPass.uniforms;
        vlPass.needsSwap = false;

        // Occlusion Composer
        occlusionComposer = new THREE.EffectComposer(renderer, occRenderTarget);
        occlusionComposer.addPass(new THREE.RenderPass(scene, camera));
        occlusionComposer.addPass(hBlur);
        occlusionComposer.addPass(vBlur);
        occlusionComposer.addPass(hBlur);
        occlusionComposer.addPass(vBlur);
        occlusionComposer.addPass(hBlur);
        occlusionComposer.addPass(badTVPass);
        occlusionComposer.addPass(vlPass);

        // Bloom pass
        bloomPass = new THREE.UnrealBloomPass(width / height, 0.5, .8, .77);

        // Film pass
        filmPass = new THREE.ShaderPass(THREE.FilmShader);
        filmPass.uniforms.sCount.value = 1200;
        filmPass.uniforms.grayscale.value = false;
        filmPass.uniforms.sIntensity.value = 1.5;
        filmPass.uniforms.nIntensity.value = 0.2;

        // Blend occRenderTarget into main render target 
        const blendPass = new THREE.ShaderPass(THREE.AdditiveBlendingShader);
        blendPass.uniforms.tAdd.value = occRenderTarget.texture;
        blendPass.renderToScreen = true;

        // Main Composer
        composer = new THREE.EffectComposer(renderer);
        composer.addPass(new THREE.RenderPass(scene, camera));
        /* composer.addPass(bloomPass); */
        composer.addPass(badTVPass);
        composer.addPass(filmPass);
        composer.addPass(blendPass);
    }

    function onFrame() {
        requestAnimationFrame(onFrame);
        update();
        render();
    }

    function update() {
        const timeDelta = clock.getDelta();
        const elapsed = clock.getElapsedTime();

        filmPass.uniforms.time.value += timeDelta;
        badTVPass.uniforms.time.value += 0.01;

        if (itemMesh) {
            itemMesh.rotation.y = Math.sin(elapsed / 2) / 15;
            itemMesh.rotation.z = Math.cos(elapsed / 2) / 50;
            occMesh.rotation.copy(itemMesh.rotation);
        }
    }

    function render() {
        camera.layers.set(OCCLUSION_LAYER);
        //renderer.setClearColor(0x000000);
        occlusionComposer.render();

        camera.layers.set(DEFAULT_LAYER);
        //renderer.setClearColor(0x000000);
        composer.render();
    }

    /* function setupGUI() {
      let folder,
      min,
      max,
      step,
      updateShaderLight = function () {
        const p = lightSource.position.clone(),
        vector = p.project(camera),
        x = (vector.x + 1) / 2,
        y = (vector.y + 1) / 2;
        vlShaderUniforms.lightPosition.value.set(x, y);
      };
     
      updateShaderLight();
     
      // Bloom Controls
      folder = gui.addFolder('Bloom');
      folder.add(bloomPass, 'radius').
      min(0).
      max(10).
      name('Radius');
      folder.add(bloomPass, 'threshold').
      min(0).
      max(1).
      name('Threshold');
      folder.add(bloomPass, 'strength').
      min(0).
      max(10).
      name('Strength');
      folder.open();
     
      // Bad TV Controls
      folder = gui.addFolder('TV');
      folder.add(badTVPass.uniforms.distortion, 'value').
      min(0).
      max(10).
      name('Distortion 1');
      folder.add(badTVPass.uniforms.distortion2, 'value').
      min(0).
      max(10).
      name('Distortion 2');
      folder.add(badTVPass.uniforms.speed, 'value').
      min(0).
      max(1).
      name('Speed');
      folder.add(badTVPass.uniforms.rollSpeed, 'value').
      min(0).
      max(10).
      name('Roll Speed');
      folder.open();
     
      // Light Controls
      folder = gui.addFolder('Light Position');
      folder.add(lightSource.position, 'x').
      min(-50).
      max(50).
      onChange(updateShaderLight);
      folder.add(lightSource.position, 'y').
      min(-50).
      max(50).
      onChange(updateShaderLight);
      folder.add(lightSource.position, 'z').
      min(-50).
      max(50).
      onChange(updateShaderLight);
      folder.open();
     
      // Volumetric Light Controls
      folder = gui.addFolder('Volumeteric Light Shader');
      folder.add(vlShaderUniforms.exposure, 'value').
      min(0).
      max(1).
      name('Exposure');
      folder.add(vlShaderUniforms.decay, 'value').
      min(0).
      max(1).
      name('Decay');
      folder.add(vlShaderUniforms.density, 'value').
      min(0).
      max(10).
      name('Density');
      folder.add(vlShaderUniforms.weight, 'value').
      min(0).
      max(1).
      name('Weight');
      folder.add(vlShaderUniforms.samples, 'value').
      min(1).
      max(100).
      name('Samples');
     
      folder.open();
    } */

    function addRenderTargetImage() {
        const material = new THREE.ShaderMaterial(THREE.PassThroughShader);
        material.uniforms.tDiffuse.value = occRenderTarget.texture;

        const mesh = new THREE.Mesh(new THREE.PlaneBufferGeometry(2, 2), material);
        composer.passes[1].scene.add(mesh);
        mesh.visible = false;

        /*   const folder = gui.addFolder('Light Pass Render Image');
          folder.add(mesh, 'visible');
          folder.open(); */
    }

    setupScene();
    setupPostprocessing();
    onFrame();
    /*   setupGUI(); */
    addRenderTargetImage();
</script>
<?php get_footer();
