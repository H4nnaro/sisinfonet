<!DOCTYPE html>
<html lang="id">

<head>
    <?php $this->load->view('layout/head'); ?>
</head>

<body class="bg-white text-gray-800 font-sans" x-data="app()" x-init="init()">

    <!-- Navbar -->
    <?php $this->load->view('layout/header'); ?>

    <!-- Banner -->
    <?php $this->load->view('layout/banner'); ?>

    <!-- Tentang -->
    <section id="tentang" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto bg-white rounded-2xl px-8 text-center">
            <h1 id="typewriter" class="text-2xl md:text-4xl font-extrabold text-blue-900" x-text="t.about.title"></h1>
            <p class="text-gray-400 mb-6 mt-2">NPO <?= $title ?></p>
            <p class="text-gray-700 text-md md:text-lg leading-relaxed text-justify" x-text="t.about.content"></p>
            <!-- <a href="#industries" class="mt-8 inline-block bg-gray-700 hover:bg-gray-800 text-white font-semibold px-6 py-3 rounded-full transition" x-text="t.about.button"></a> -->
        </div>
    </section>

    <section id="tentang-dan-fitur" class="py-20 bg-gray-200">
        <div class="max-w-7xl mx-auto bg-gray-200 rounded-2xl px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-start">
                <!-- Kolom Kiri - Our Mission -->
                <div class="text-left">
                    <h1 class="text-2xl md:text-4xl font-extrabold text-blue-900 mb-6" x-text="t.mission.title"></h1>
                    <p class="text-gray-700 text-md md:text-lg leading-relaxed text-justify" x-text="t.mission.desc"></p>
                </div>

                <!-- Kolom Kanan - Features -->
                <div class="text-left">
                    <h1 class="text-2xl md:text-4xl font-extrabold text-blue-900 mb-6" x-text="t.features.title"></h1>
                    <p class="text-gray-700 text-md md:text-lg leading-relaxed text-justify" x-text="t.features.desc"></p>
                    <br>
                    <p class="text-gray-700 text-md md:text-lg leading-relaxed text-justify" x-text="t.features.desc2"></p>
                    <br>
                    <ul class="list-disc list-inside text-gray-700 text-md md:text-lg leading-relaxed text-justify">
                        <li x-text="t.features.l1"></li>
                        <li x-text="t.features.l2"></li>
                        <li x-text="t.features.l3"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="berita" class="py-12 bg-white" x-data="carousel()" x-init="init()">
        <div class="container mx-auto px-2 sm:px-4 relative"><!-- padding container lebih kecil di mobile -->
            <!-- Carousel Track -->
            <div class="overflow-hidden w-full">
                <div class="flex transition-transform duration-500"
                    :style="`transform: translateX(-${currentIndex * 100}%)`">
                    <template x-for="(item, i) in items" :key="i">
                        <div class="flex-shrink-0 w-full flex justify-center px-2">
                            <div class="w-full sm:w-50% bg-white rounded-3xl overflow-hidden shadow-lg h-full flex flex-col transition hover:shadow-xl hover:-translate-y-1 duration-300">
                                <div class="relative">
                                    <img :src="item.img" alt="" class="w-full h-40% object-cover rounded-t-3xl" />
                                </div>
                                <div class="p-6 flex flex-col justify-between flex-grow">
                                    <h3 class="text-2xl font-bold text-red-700 mb-3" x-text="item.title[selectedLang]"></h3>
                                    <p class="text-gray-600 text-base leading-relaxed" x-text="item.desc[selectedLang]"></p>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Nav Buttons (selalu tampil di desktop, tetap pakai isMobile untuk mobile only) -->
            <div>
                <button @click="prev()"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white text-red-600 border border-gray-300 rounded-full w-8 h-8 flex items-center justify-center shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="next()"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white text-red-600 border border-gray-300 rounded-full w-8 h-8 flex items-center justify-center shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Dot Indicators (hanya mobile pakai x-if) -->
            <template x-if="isMobile">
                <div class="flex justify-center mt-6 space-x-2">
                    <template x-for="index in items.length" :key="index">
                        <div @click="goTo(index - 1)" class="w-3 h-3 rounded-full cursor-pointer"
                            :class="currentIndex === (index - 1) ? 'bg-red-600' : 'bg-gray-300'"></div>
                    </template>
                </div>
            </template>

            <!-- Dot Indicators Desktop (selalu tampil) -->
            <div class="hidden md:flex justify-center mt-6 space-x-2">
                <template x-for="index in maxIndex + 1" :key="index">
                    <div @click="goTo(index - 1)" class="w-3 h-3 rounded-full cursor-pointer"
                        :class="currentIndex === (index - 1) ? 'bg-red-600' : 'bg-gray-300'">
                    </div>
                </template>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view('layout/footer'); ?>

    <script>
        function carousel() {
            return {
                items: [
                    {
                        img: 'assets/img/1.png',
                        title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/1.png',
                        title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/2.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/3.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/4.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/1.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/2.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/3.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/4.png', title: { id: "Manufaktur", en: "Manufacturing", jp: "製造業" },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    }
                ],
                currentIndex: 0,
                visibleCards: 1,
                isMobile: true,
                cardWidthClass: 'w-full',
                maxIndex: 0,
                init() {

                    this.updateLayout();
                    window.addEventListener('resize', this.updateLayout.bind(this));
                    this.goTo(0);
                },
                updateLayout() {
                    this.isMobile = window.innerWidth < 640;
                    this.visibleCards = this.isMobile ? 1 : 4; // ← ubah jadi 4 di desktop
                    this.cardWidthClass = this.isMobile ? 'w-full' : `w-1/${this.visibleCards}`;
                    this.maxIndex = Math.max(0, this.items.length - this.visibleCards);
                    if (this.currentIndex > this.maxIndex) {
                        this.currentIndex = this.maxIndex;
                    }
                },
                prev() {
                    console.log("prev");
                    this.currentIndex = this.currentIndex > 0 ? this.currentIndex - 1 : this.maxIndex;
                },
                next() {
                    console.log("next");
                    this.currentIndex = this.currentIndex < this.maxIndex ? this.currentIndex + 1 : 0;
                },
                goTo(index) {
                    if (index >= 0 && index <= this.maxIndex) {
                        this.currentIndex = index;
                    }
                }
            };
        }
    </script>

    <script>
        function app() {
            return {
                // Language & Translations
                selectedLang: 'jp',
                langLabels: {
                    en: {
                        label: 'English',
                        flag: 'https://flagcdn.com/us.svg',
                    },
                    jp: {
                        label: '日本語',
                        flag: 'https://flagcdn.com/jp.svg',
                    }
                },
                translations: {
                    id: {
                        nav: {
                            home: 'Beranda',
                            about: 'Tentang',
                            contact: 'Kontak'
                        },
                        banner: {
                            src: 'assets/img/slider-id.png'
                        },
                        about: {
                            title: 'Pengembangan SDM Indonesia',
                            content: 'Pengembangan Sumber Daya Manusia Indonesia melalui Program Pemagangan ke Jepang bekerjasama dengan JIAEC (Japan Indonesia Association For Economy Cooperation) – Japan.',
                            button: 'Temukan lebih lanjut'
                        },
                        headline: 'DENGAN SOS, KESELAMATAN ANDA ADALAH PERISAI HARIAN KAMI!',
                        tagline: '#SelesaikanDenganSOS',
                        footer: 'NPO <?= $title; ?> © <?= date('Y') ?>',
                        stats: {
                            projects: 'Project Dikelola',
                            personnel: 'Personil',
                            branches: 'Kantor Cabang'
                        },
                    },
                    en: {
                        nav: {
                            home: 'Home',
                            about: 'About',
                            contact: 'Contact'
                        },
                        banner: {
                            src: 'assets/img/slider-en.png'
                        },
                        about: {
                            title: 'About Us',
                            content: 'This is an NPO that mainly provides guidance to trainees on their daily lives in Japan and provides support to their families in Indonesia in order to ensure the smooth and proper operation of the technical intern training program, a joint venture between the Japan Indonesia Association For Economy Cooperation (a public interest incorporated association) and the local company PT JIAEC.',
                            button: 'Learn more'
                        },
                        headline: 'WITH SOS, YOUR SAFETY IS OUR DAILY SHIELD!',
                        tagline: '#SolveWithSOS',
                        footer: 'NPO <?= $title; ?> © <?= date('Y') ?>',
                        stats: {
                            p: 'structure and history company',
                            projects: 'Public Interest Corporation Japan-Indonesia Economic Cooperation Association ' +
                                'Headquarters: Chiyoda-ku, ' +
                                'TokyoSupervision: Prime Ministers ' +
                                'OfficeEstablished: Approved in 1971, ' +
                                'established as a public interest corporation on April 1, ' +
                                '2012 Branches: Tohoku, North Kanto, Takasaki, Shizuoka, Chubu, Kansai, Okayama, Kyushu, South Kyushu ' +
                                'Training Center: Narita ' +
                                'JIAEC Homepage: http://www.jiaec.jp,',
                            personnel: 'NPO KMKI・JAPAN Non-profit organization supervised by the Cabinet Office Established: 1995 Headquarters: Narita City, Chiba Prefecture',
                            branches: 'PT. JIAEC Japanese Language School & Technical Trainee Dispatch Organization Headquarters: Jakarta Supervised by: Foreign Investment Coordination Agency and Ministry of Labor Established: 1996 Training Centers in Jakarta, Surabaya, and Yogyakarta JIAEC Resident Office Headquarters: Jakarta Supervised by: Foreign Investment Coordination Agency Established: 1993 in Surabaya and Yogyakarta.'
                        },
                        features: {
                            title: 'Features',
                            desc: 'KMKI-JAPAN was established in 1995, almost simultaneously with the start of the Technical Intern Training Program (1993). Since then, through this activity, we have not only improved the skills of trainees but also provided various support and guidance for living in Japanese society, striving to enhance the image of Indonesians in Japan. Additionally, supporting the career paths of returned trainees has become a major pillar of our activities. ',
                            desc2: 'The technical interns we have assisted so far are as follows: ',
                            l1: 'Registered in the database Over 11000 people',
                            l2: 'Members of the alumni association 6000 people',
                            l3: 'Those wishing to work domestically and internationally 2000 people',
                        },
                        mission: {
                            title: 'Our Mission',
                            desc: 'Under the Specific Skills System, which is expected to have a significant impact on the future of Japanese society, and the new system starting in 2027 (Training Employment System), we believe it is our mission to build a new foundation for Japan-Indonesia relations at the workplace level in Japan, utilizing the experience and knowledge we have gained so far.'
                        },
                        contact: {
                            h1: 'Contact Us',
                            layanantitle: 'The Service You Want to Choose',
                            layananpilih: 'choose service',
                            location: 'location',
                            name: "full name",
                            phone: 'phone number',
                            optional: 'optional',
                            email: 'email',
                            company: 'company',
                            help: 'how can we help you',
                            helpplaceholder: 'max. 500 characters',
                            recaptcha: 'reCAPTCHA',
                            recaptcha2: 'Privacy • Terms',
                            agree: 'I agree to the Terms and Conditions',
                            send: 'send',
                        }
                    },
                    jp: {
                        nav: {
                            home: 'ホーム',
                            about: '紹介',
                            contact: '連絡先'
                        },
                        banner: {
                            src: 'assets/img/slider-jp.png'
                        },
                        about: {
                            title: 'とは',
                            content: '公益社団法人 日本・インドネシア経済協力事業協会と現地PT JIAEC社 の共同事業である技能実習制度の運営を円滑適正に行うために、主に実習生の日本での生活上の指導とインドネシアの家族も含めたサポート活動をしているNPO法人です。',
                            button: 'もっと見る'
                        },
                        headline: 'SOSで、あなたの安全が私たちの日々の盾です！',
                        tagline: '#SOSで解決',
                        footer: 'NPO <?= $title; ?> © <?= date('Y') ?>',
                        stats: {
                            p: '構造と歴史の会社',
                            projects: '公益社団法人 日本・インドネシア経済協力事業協会 ' +
                                '本部：東京都千代田区 ' +
                                '所管：内閣総理大臣 認可 ' +
                                '設立：1971年認可、2012年4月1日（公益社団法人設立） ' +
                                '支局：東北、北関東、高崎、静岡、中部、関西、岡山、九州、南九州 ' +
                                '研修センター：成田 ' +
                                'JIAECホームページ：http://www.jiaec.jp',
                            personnel: 'NPO KMKI・JAPAN' +
                                '特定非営利活動法人' +
                                '所管：内閣府 設立：1995年' +
                                '本部：千葉県成田市',
                            branches: 'PT. JIAEC' +
                                '日本語学校・技術研修生送り出し組織 ' +
                                '本部：ジャカルタ 所管：外資調整庁・労働省 設立：1996年' +
                                '研修所 ジャカルタ、スラバヤ、ジョグジャカルタ JIAEC駐在員事務所' +
                                '本部：ジャカルタ 所管：外資調整庁 設立：1993年' +
                                'スラバヤ、ジョグジャカルタ'
                        },
                        features: {
                            title: '特徴 ',
                            desc: 'KMKI-JAPANの創立は1995年と古く、技能実習制度開始(1993年)とほぼ同時期に設立されました。その後今日までの間に、この活動を通じて実習生の能力向上はもとより日本社会で生活してゆく上での、様々な支 援、指導を行う事で、日本でのインドネシア人への好感度向上に努めてきました。又、帰国した実習生のその後の進路のサポートを行う事も私たちの活動の大きな柱になっています。 ',
                            desc2: 'これまでにお世話してきた技能実習生は、以下の通りです。  ',
                            l1: 'データ―ベース上に登録されている者  11000人以上 ',
                            l2: '同窓会に入会している者 6000人',
                            l3: '国内外での就労を希望している者  2000人　 '
                        },
                        mission: {
                            title: '今からの 使命 ',
                            desc: '今後の日本社会の未来に大きな影響があると思われる特定技能制度や2027年から始まる新制度（育成就労制度）の下、これまでに得た経験と知見を生かして、日本の職場レベルの新しい日イ関係の基礎を築いて行くのが私たちの使命と考えています。 '
                        },
                        contact: {
                            h1: 'お問い合わせ',
                            layanantitle: '選びたいサービス',
                            layananpilih: 'サービスを選択する',
                            location: '場所',
                            name: "フルネーム",
                            phone: '電話番号',
                            optional: 'オプション',
                            email: 'メール',
                            company: '会社',
                            help: 'どのようにお手伝いできますか',
                            helpplaceholder: '最大500文字まで',
                            recaptcha: 'reCAPTCHA',
                            recaptcha2: 'Privacy • Terms',
                            agree: 'I agree to the Terms and Conditions',
                            send: '送る',
                        }
                    }
                },
                setLang(lang) {
                    this.selectedLang = lang;
                    localStorage.setItem('lang', lang);
                },
                get t() {
                    return this.translations[this.selectedLang];
                },
                // Init hook if needed
                init() {
                    const saved = localStorage.getItem('lang');
                    if (saved) this.selectedLang = saved;
                    this.startAutoScroll();
                }
            }
        }
    </script>

    <script>
        function bannerCarousel() {
            return {
                images: [
                    'assets/img/slider6.png',
                    'assets/img/slider1.png',
                    'assets/img/slider2.png',
                    'assets/img/slider4.png',
                    'assets/img/slider5.png',
                    'assets/img/slider7.png',
                    'assets/img/slider8.png'
                ],
                active: 0,
                interval: null,
                t: {
                    headline: 'Selamat Datang',
                    tagline: 'Gunakan tombol untuk berpindah'
                },
                start() {
                    this.interval = setInterval(() => {
                        this.next();
                    }, 5500);
                },
                next() {
                    this.active = (this.active + 1) % this.images.length;
                },
                prev() {
                    this.active = (this.active - 1 + this.images.length) % this.images.length;
                }
            }
        }
    </script>

</body>

</html>