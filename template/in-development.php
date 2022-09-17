<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Construction</title>
</head>

<body>

   
    <main>
        <style>
            :root {
                --c-black: #111111;
                --c-white: #fcfcfc;
                --c-primary: #d32f2f;
                --c-accent: #ffc107;
                --c-theme: #212121;
                --c-grey: #424242;
            }
    
    
            *,
            *::before,
            *::after {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
    
            @font-face {
                font-family: "dana VF";
                src: url("<?php echo get_theme_file_uri('/fonts/dana2webGX.woff'); ?>") format("woff-variations"),
                    /* will be the standard and works in Safari now */
                    url("<?php echo get_theme_file_uri('/fonts/dana2webGX.woff'); ?>") format("woff");
                /* for the other supporting browsers */
                font-display: swap;
                font-weight: 1 999;
            }
    
            body,
            html {
                direction: rtl;
                font-family: dana VF !important;
                scroll-behavior: smooth;
            }
    
            body {
                overflow-x: hidden;
                color: var(--c-text);
            }
    
            main {
                width: 100%;
                position: absolute;
                height: 100vh;
                background: url(<?php echo get_theme_file_uri('/static/falch.edit-min.jpg'); ?>) no-repeat center;
                background-size: cover;
            }
    
            main .content {
                width: 800px;
                max-width: 75%;
                height: 600px;
                max-height: 90%;
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate3d(-50%, -50%, 0);
                border-radius: 12px;
                background-color: #fcfcfc80;
                padding: 24px;
                text-align: center;
                backdrop-filter: blur(18px);
            }
    
            header svg {
                width: 150px;
                height: 150px;
            }
    
            .content .title {
                width: 100%;
                position: absolute;
                top: 50%;
                left: 0;
                transform: translateY(-50%);
            }
    
            .content .title h1 {
                font-variation-settings: "wght"750, "wdth"150, "KASH"100;
                color: var(--c-primary);
            }
    
            .content .title h4 {
                font-variation-settings: "wght"250, "wdth"150, "KASH"10;
                margin-top: 20px;
            }
    
            .content .cta {
                position: absolute;
                bottom: 0;
                padding: 15px;
                text-align: right;
                width: 90%;
                left: 5%;
            }
    
            .content .cta h2 {
                font-size: 18px;
                margin-bottom: 12px;
            }
    
            .content .cta a {
                display: flex;
                flex-flow: row nowrap;
                align-items: center;
                border-radius: 4px;
                cursor: pointer;
                overflow: hidden;
                position: relative;
                transition: all 0.25s ease;
                height: 54px;
                width: 220px;
                padding-left: 20px;
                color: var(--c-white);
                font-variation-settings: "wght"250, "wdth"150, "KASH"10;
                text-decoration: none;
            }
    
            .content .cta .iconWrapper {
                position: relative;
                z-index: 5;
                overflow: hidden;
                width: 80px;
                height: 60px;
                padding: 14px 12px 0 0;
            }
    
            .content .cta .iconBackground {
                height: 120px;
                width: 120px;
                border-radius: 50%;
                background-color: #fcfcfc40;
                position: absolute;
                right: 0;
                top: 50%;
                transform: translate3d(50%, -50%, 0);
                z-index: 1;
                transition: all 0.5s ease-in-out;
            }
    
            .content .cta a:hover .iconBackground {
                width: 500%;
                height: 200px;
                background-color: #fcfcfc00;
            }
    
            .content .cta .text {
                position: relative;
                z-index: 5;
            }
    
            .content .cta .wrapper {
                display: flex;
                justify-content: space-between;
                flex-flow: row nowrap;
            }
    
            @media (max-width: 992px) {
                .content .cta .wrapper {
                    flex-flow: column wrap;
                    justify-content: center;
                }
    
                .content .cta a {
                    margin: 12px auto 0 auto;
                    height: 40px;
                    width: 180px;
                }
    
                main .content {
                    padding: 12px;
                }
            }
    
            .instagram a {
                background-color: #282828;
            }
    
            .youtube a {
                background-color: #282828;
            }
        </style>

        <div class="content">

            <header>
                <i>
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1064.3 729.14">
                        <path
                            d="M1078.43,749H21.84c-1.29-4.71-3.69-9.42-3.7-14.13q-.27-350.52-.16-701c0-13.61.34-14,13.85-13.95,86.59.13,173.18.42,259.78.4q270-.08,540.1-.4,118.37-.07,236.73,0c13.5,0,13.84.35,13.84,14V389.05q0,173.34-.16,346.68C1082.11,740.15,1079.71,744.58,1078.43,749Zm-528-85v.53H985.51c12.24,0,12.66-.37,12.66-11.32q0-269,0-538.08c0-10.36-.65-11-11.23-11-39,.13-78.06.43-117.09.47q-35.9,0-71.78-.56c-7-.1-10.33,1.93-10.32,9.71q.27,146.48,0,293c0,7.69,3.08,9.7,10.22,9.64,30.48-.26,61-.13,91.44-.09,5.13,0,9.72.07,9.76-7.27s-4.3-8.09-10-8c-25.64.29-51.28.25-76.91.71-7.92.14-11.11-2.34-11.06-10.79q.45-81.14,0-162.26c0-8.27,2.79-10.91,10.91-10.87,53.84.24,107.68.11,161.53.13,10.36,0,11.14.8,11.15,11.23q0,129.81,0,259.63c0,11-.73,11.8-11.54,11.76-33.05-.13-66.09-.5-99.14-.48-53,0-106,.34-159,.48-10.54,0-11.33-.78-11.32-11,0-12.24.24-24.48.24-36.72q0-168.24,0-336.5c0-1.42-.06-2.85,0-4.27.22-4.68-1.4-7.73-6.63-7.87-5.82-.16-7.28,3.29-7.11,8.25.08,2.28,0,4.56,0,6.83q.13,183.21.28,366.41c0,14.84-.06,14.92-14.61,14.89q-133.35-.24-266.69-.52c-12.13,0-13.13,1-13.1,13.07q.11,62.34.25,124.69c0,11.62-.37,12-12,12-53.85-.11-107.7-.34-161.54-.37-32.2,0-64.39.07-96.58.51-7.91.11-11-2.09-11-10.57q.31-205.41,0-410.83c0-8.22,2.64-10.8,10.81-10.76q81.18.42,162.38,0c7.57,0,10.57,2.06,10.55,10.17q-.33,156.28,0,312.58c0,7.9-2.6,10.53-10.35,10.39-20.21-.35-40.44-.16-60.66-.1-12.93,0-13.51-.46-13.49-13.4q.14-111,.29-222a67.58,67.58,0,0,0-.06-6.83c-.58-5.58-6-8.79-10.23-5.38-2.23,1.8-3.26,6.24-3.27,9.5q-.26,120.84-.13,241.69c0,10.59.61,11.24,11,11.25,26.76,0,53.53-.16,80.29.07,19.9.17,19.92.4,19.9-19.45q-.12-158-.27-316c0-12,.47-12.35,12.63-12.32q29.89.06,59.8,0c11.5,0,11.93.36,11.93,12q0,89.67-.14,179.34c0,4.58,1.13,7.9,5.68,7.1,2.78-.49,6.05-3.4,7.28-6.07,1.32-2.86.61-6.7.61-10.11q-.11-85.41-.25-170.81c0-11.09.42-11.47,11.63-11.48,21.08,0,42.16.26,63.23-.13,7.62-.14,9.64,2.69,9.61,10-.27,60.63-.12,121.27-.31,181.9,0,5,1.82,6.54,6.4,6.63s7.11-1.28,7-6.23c-.08-3.41.22-6.83.22-10.24q-.12-85.41-.25-170.81c0-10.4.75-11.11,11.21-11.12,20.51,0,41,0,61.52,0,13,0,13.17.16,13.17,13.52q0,88.82-.12,177.64c0,4.34.48,7.2,5.44,7.62s7.45-2.1,7.81-6.83c.26-3.4.3-6.82.3-10.23q0-140.49,0-281c0-14.08-.39-14.49-14.21-14.49H116.18c-13.6,0-14.09.48-14.09,13.73q0,266.49,0,533c0,13.21.52,13.74,14.11,13.72Q247,664.25,377.75,664,464.08,663.87,550.4,664ZM900.28,312.19c.08-1.28.17-2.55.25-3.83-2.53-2.11-4.81-5.52-7.64-6.06-4.71-.89-7.74,1.45-7.54,7.35.16,4.92,1.52,8.17,6.58,7.32C894.89,316.47,897.51,313.85,900.28,312.19Z"
                            transform="translate(-17.98 -19.86)" />
                        <path
                            d="M549.44,203.58c-11.38,0-22.76-.14-34.14.06-5.66.09-8.26-1.84-8.21-7.9q.33-34.58,0-69.13c0-5.41,1.9-7.81,7.41-7.79q35.44.15,70.88,0c6,0,7.82,2.64,7.77,8.33-.2,22.76-.25,45.52,0,68.27.07,6.57-2.79,8.37-8.75,8.25C572.78,203.42,561.11,203.58,549.44,203.58Z"
                            transform="translate(-17.98 -19.86)" />
                        <path
                            d="M891.72,203.57c-10.8,0-21.61-.24-32.39.08-6.27.18-9.52-1.51-9.44-8.52.24-22.71.16-45.43,0-68.14,0-5.6,1.88-8.28,8-8.22q34.1.32,68.21,0c6.15,0,8.65,2.14,8.58,8.47q-.34,34.09,0,68.18c.07,6.63-3,8.3-8.87,8.21C914.45,203.45,903.08,203.58,891.72,203.57Z"
                            transform="translate(-17.98 -19.86)" />
                        <path
                            d="M494,161.73c0,11.07-.24,22.16.1,33.22.18,6.14-1.89,8.78-8.26,8.72q-34.08-.28-68.17,0c-5.76,0-8.14-2.13-8.09-8q.29-34.5,0-69c-.05-6.11,2.68-7.85,8.27-7.81,22.73.14,45.46.19,68.19,0,6.56-.06,8.22,2.91,8.06,8.88C493.76,139,494,150.37,494,161.73Z"
                            transform="translate(-17.98 -19.86)" />
                        <path
                            d="M312.12,160.64c0-11.36.15-22.72-.06-34.08-.1-5.38,1.92-7.78,7.43-7.75,23.3.12,46.61.09,69.91,0,5,0,7.16,2.07,7.13,7.16q-.18,34.94,0,69.87c0,5.4-2,7.78-7.47,7.76q-34.93-.13-69.88,0c-5.71,0-7.22-2.92-7.14-8.06C312.25,183.93,312.12,172.28,312.12,160.64Z"
                            transform="translate(-17.98 -19.86)" />
                    </svg>
                </i>
            </header>


            <div class="title">
                <h1>
                    به‌زودی
                </h1>
                <h4>
                    کارگران مشغول کارند.
                </h4>
            </div>


            <div class="cta">
                <h2>
                    همراه «فالش» باشید:
                </h2>

                <div class="wrapper">
                    <div class="instagram">

                        <a href="https://www.instagram.com/falcharts/" target="_blank" rel="noopener noreferrer">
                            <div class="iconWrapper">
                                <i>
                                    <xml version='1.0' encoding="iso-8859-1">
                                    <svg width="32" height="32" version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 551.034 551.034"
                                        style="enable-background:new 0 0 551.034 551.034;" xml:space="preserve">
                                        <g>

                                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="275.517"
                                                y1="4.57" x2="275.517" y2="549.72"
                                                gradientTransform="matrix(1 0 0 -1 0 554)">
                                                <stop offset="0" style="stop-color:#E09B3D" />
                                                <stop offset="0.3" style="stop-color:#C74C4D" />
                                                <stop offset="0.6" style="stop-color:#C21975" />
                                                <stop offset="1" style="stop-color:#7024C4" />
                                            </linearGradient>
                                            <path style="fill:url(#SVGID_1_);" d="M386.878,0H164.156C73.64,0,0,73.64,0,164.156v222.722
		c0,90.516,73.64,164.156,164.156,164.156h222.722c90.516,0,164.156-73.64,164.156-164.156V164.156
		C551.033,73.64,477.393,0,386.878,0z M495.6,386.878c0,60.045-48.677,108.722-108.722,108.722H164.156
		c-60.045,0-108.722-48.677-108.722-108.722V164.156c0-60.046,48.677-108.722,108.722-108.722h222.722
		c60.045,0,108.722,48.676,108.722,108.722L495.6,386.878L495.6,386.878z" />

                                            <linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="275.517"
                                                y1="4.57" x2="275.517" y2="549.72"
                                                gradientTransform="matrix(1 0 0 -1 0 554)">
                                                <stop offset="0" style="stop-color:#E09B3D" />
                                                <stop offset="0.3" style="stop-color:#C74C4D" />
                                                <stop offset="0.6" style="stop-color:#C21975" />
                                                <stop offset="1" style="stop-color:#7024C4" />
                                            </linearGradient>
                                            <path style="fill:url(#SVGID_2_);" d="M275.517,133C196.933,133,133,196.933,133,275.516s63.933,142.517,142.517,142.517
		S418.034,354.1,418.034,275.516S354.101,133,275.517,133z M275.517,362.6c-48.095,0-87.083-38.988-87.083-87.083
		s38.989-87.083,87.083-87.083c48.095,0,87.083,38.988,87.083,87.083C362.6,323.611,323.611,362.6,275.517,362.6z" />

                                            <linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="418.31"
                                                y1="4.57" x2="418.31" y2="549.72"
                                                gradientTransform="matrix(1 0 0 -1 0 554)">
                                                <stop offset="0" style="stop-color:#E09B3D" />
                                                <stop offset="0.3" style="stop-color:#C74C4D" />
                                                <stop offset="0.6" style="stop-color:#C21975" />
                                                <stop offset="1" style="stop-color:#7024C4" />
                                            </linearGradient>
                                            <circle style="fill:url(#SVGID_3_);" cx="418.31" cy="134.07" r="34.15" />
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </svg>



                                </i>

                            </div>
                            <div class="iconBackground"></div>

                            <div class="text">
                                <p class="">
                                    اینستاگرام
                                </p>
                            </div>
                        </a>

                    </div>

                    <div class="youtube">
                        <a href="https://www.youtube.com/channel/UCOE-XjKNlV6wva9tNNiTJbA" target="_blank"
                            rel="noopener noreferrer">
                            <div class="iconWrapper">
                                <i>
                                    <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 461 461">
                                        <path
                                            d="M365.3 67.4H95.7C42.9 67.4 0 110.3 0 163.1v134.7c0 52.9 42.9 95.7 95.7 95.7h269.5c52.9 0 95.7-42.9 95.7-95.7V163.1C461 110.3 418.1 67.4 365.3 67.4zM300.5 237.1l-126.1 60.1c-3.4 1.6-7.2-0.8-7.2-4.6V168.6c0-3.8 4-6.2 7.3-4.5l126.1 63.9C304.4 229.9 304.3 235.2 300.5 237.1z"
                                            fill="#F61C0D" />
                                    </svg>

                                </i>

                            </div>
                            <div class="iconBackground"></div>

                            <div class="text">
                                <p class="">
                                    یوتیوب
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--
    <link rel="stylesheet" href="/general.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="/inViewPort.js"></script>
    -->

</body>

</html>