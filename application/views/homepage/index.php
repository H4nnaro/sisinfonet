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
    <section id="tentang" class="py-10 bg-white">
        <div class="max-w-7xl mx-auto bg-white rounded-2xl px-8 text-center">
            <h1 id="typewriter" class="text-2xl md:text-4xl font-extrabold text-blue-900" x-text="t.about.title"></h1>
            <p class="text-gray-400 mb-6 mt-2">NPO <?= $title ?></p>
            <p class="text-gray-700 text-lg md:text-xl leading-relaxed text-justify" x-text="t.about.content"></p>
            <a href="<?= base_url('about'); ?>" class="mt-8 inline-block bg-gray-700 hover:bg-gray-800 text-white font-semibold px-6 py-3 rounded-full transition" x-text="t.about.button"></a>
        </div>
    </section>

    <section id="berita" class="py-12 bg-gray-200" x-data="carousel()" x-init="init()">
        <div class="container mx-auto px-2 sm:px-4 relative"><!-- padding container lebih kecil di mobile -->
            <!-- Carousel Track -->
            <div class="overflow-hidden w-full">
                <div class="flex transition-transform duration-500"
                    :style="`transform: translateX(-${currentIndex * (100 / visibleCards)}%)`">
                    <template x-for="(item, i) in items" :key="i">
                        <div class="flex-shrink-0" :class="isMobile ? 'w-full px-0' : `w-1/${visibleCards} px-2`">
                            <!-- padding hanya desktop -->
                            <div class="bg-white rounded-xl overflow-hidden shadow-sm h-full flex flex-col">
                                <div class="relative">
                                    <img :src="item.img" alt="" class="w-full h-64 object-cover" />
                                </div>
                                <!-- <div class="p-5 flex flex-col justify-between flex-grow">
                                    <h3 class="text-xl font-semibold text-blue-900 mb-2"
                                        x-text="item.title[selectedLang]"></h3>
                                    <p class="text-gray-600 text-sm" x-text="item.desc[selectedLang]"></p>
                                </div> -->
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            <!-- Nav Buttons (selalu tampil di desktop, tetap pakai isMobile untuk mobile only) -->
            <div>
                <button @click="prev()"
                    class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-blue-900 text-yellow-500 rounded-full w-8 h-8 flex items-center justify-center shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="next()"
                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-900 text-yellow-500 rounded-full w-8 h-8 flex items-center justify-center shadow">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d=" M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view('layout/footer'); ?>

    <script>
        function carousel() {
            return {
                items: [{
                        img: 'assets/img/p1.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p2.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p3.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p4.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p5.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p6.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p8.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p9.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p10.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p11.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p12.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        }
                    },
                    {
                        img: 'assets/img/p13.png',
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
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
                intervalId: null,
                isPaused: false,

                init() {
                    this.updateLayout();
                    window.addEventListener('resize', this.updateLayout.bind(this));
                    this.goTo(0);
                    this.setupInteractionEvents(); // ⬅️ diganti dari setupHoverEvents()
                    this.startAutoSlide();
                },

                updateLayout() {
                    this.isMobile = window.innerWidth < 640;
                    this.visibleCards = this.isMobile ? 1 : 4;
                    this.cardWidthClass = this.isMobile ? 'w-full' : `w-1/${this.visibleCards}`;
                    this.maxIndex = Math.max(0, this.items.length - this.visibleCards);
                    if (this.currentIndex > this.maxIndex) {
                        this.currentIndex = this.maxIndex;
                    }
                },

                prev() {
                    this.currentIndex = this.currentIndex > 0 ? this.currentIndex - 1 : this.maxIndex;
                },

                next() {
                    this.currentIndex = this.currentIndex < this.maxIndex ? this.currentIndex + 1 : 0;
                },

                goTo(index) {
                    if (index >= 0 && index <= this.maxIndex) {
                        this.currentIndex = index;
                    }
                },

                startAutoSlide() {
                    this.intervalId = setInterval(() => {
                        if (!this.isPaused) {
                            this.next();
                        }
                    }, 5000);
                },

                stopAutoSlide() {
                    clearInterval(this.intervalId);
                    this.intervalId = null;
                },

                setupInteractionEvents() {
                    const section = document.getElementById("berita");

                    // Mouse events (desktop)
                    section.addEventListener("mouseenter", () => {
                        this.isPaused = true;
                    });
                    section.addEventListener("mouseleave", () => {
                        this.isPaused = false;
                    });

                    // Touch events (mobile)
                    section.addEventListener("touchstart", () => {
                        this.isPaused = true;
                    });
                    section.addEventListener("touchend", () => {
                        this.isPaused = false;
                    });
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
                        services: {
                            label: 'Layanan',
                            title: 'Layanan Terintegrasi yang Kami Tawarkan',
                            description: 'Kami menyediakan solusi terintegrasi yang komprehensif untuk membantu pengelolaan perusahaan-perusahaan besar, memberikan kenyamanan agar perusahaan dapat lebih fokus untuk mengembangkan bisnis.'
                        },
                        industries: {
                            section: "Industri",
                            title: "Dukungan yang Tepat untuk Setiap Sektor",
                            description: "Kami memahami kebutuhan unik setiap industri...",
                            btnMore: "Selengkapnya"
                        }
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
                        services: {
                            label: 'Services',
                            title: 'Integrated Services We Offer',
                            description: 'We provide comprehensive integrated solutions to assist in the management of large companies, providing convenience so that companies can focus more on developing their business.'
                        },
                        industries: {
                            section: "Training",
                            title: "Pre-Departure Training",
                            description: "PT JIAEC",
                            // btnMore: "Read More"
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
                        services: {
                            label: 'サービス',
                            title: '私たちが提供する統合サービス',
                            description: '大企業の管理を支援するために、包括的な統合ソリューションを提供し、企業がビジネスの開発により集中できるようにします。'
                        },
                        industries: {
                            section: "トレーニング",
                            title: "出発前研修",
                            description: "PT JIAEC",
                            // btnMore: "もっと見る"
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

                // Carousel logic
                scrollInterval: null,
                isDragging: false,
                startX: 0,
                scrollLeftStart: 0,
                industries: [{
                        img: "assets/img/p1.png",
                        title: {
                            id: "Manufaktur",
                            en: "Manufacturing",
                            jp: "製造業"
                        },
                        desc: {
                            id: "Layanan keamanan, kebersihan, tenaga kerja, dan parkir untuk manufaktur.",
                            en: "Security, cleaning, labor, and parking systems for manufacturing.",
                            jp: "製造業向けの警備、清掃、労働力、駐車管理。"
                        },
                        url: "https://example.com/manufacturing"
                    },
                    {
                        img: "assets/img/p2.png",
                        title: {
                            id: "Logistik",
                            en: "Logistics",
                            jp: "物流"
                        },
                        desc: {
                            id: "Efisiensi gudang dengan keamanan dan sistem parkir.",
                            en: "Warehouse efficiency with security and parking systems.",
                            jp: "倉庫の効率化、警備と駐車管理。"
                        },
                        url: "https://example.com/logistics"
                    },
                    {
                        img: "assets/img/p3.png",
                        title: {
                            id: "Ritel",
                            en: "Retail",
                            jp: "小売"
                        },
                        desc: {
                            id: "Pengalaman pelanggan ritel yang aman dan bersih.",
                            en: "Clean and secure customer experience in retail.",
                            jp: "小売業における安全で清潔な顧客体験。"
                        },
                        url: "https://example.com/retail"
                    },
                    {
                        img: "assets/img/p4.png",
                        title: {
                            id: "Kesehatan",
                            en: "Healthcare",
                            jp: "医療"
                        },
                        desc: {
                            id: "Dukungan lengkap untuk fasilitas kesehatan.",
                            en: "Full support for healthcare facilities.",
                            jp: "医療施設への包括的な支援。"
                        },
                        url: "https://example.com/healthcare"
                    },
                    {
                        img: "assets/img/p5.png",
                        title: {
                            id: "Pendidikan",
                            en: "Education",
                            jp: "教育"
                        },
                        desc: {
                            id: "Keamanan dan kebersihan sekolah dan universitas.",
                            en: "Security and cleanliness for schools and universities.",
                            jp: "学校や大学の安全と清掃。"
                        },
                        url: "https://example.com/education"
                    },
                    {
                        img: "assets/img/p6.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p7.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p8.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p9.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p10.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p11.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p12.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    },
                    {
                        img: "assets/img/p13.png",
                        title: {
                            id: "Pemerintahan",
                            en: "Government",
                            jp: "行政"
                        },
                        desc: {
                            id: "Solusi untuk instansi pemerintah.",
                            en: "Solutions for government institutions.",
                            jp: "行政機関向けのソリューション。"
                        },
                        url: "https://example.com/government"
                    }
                ],

                get cardStyle() {
                    const widthPx = window.innerWidth;
                    if (widthPx < 640) return 'width: 80vw; max-width: 280px;';
                    if (widthPx < 1024) return 'width: 45vw; max-width: 320px;';
                    return 'width: 280px;';
                },

                startAutoScroll() {
                    const el = this.$refs.carousel;
                    if (this.scrollFrame) cancelAnimationFrame(this.scrollFrame);

                    const scrollSpeed = 2; // atur kecepatan scroll di sini

                    const scroll = () => {
                        if (!this.isDragging) {
                            el.scrollLeft += scrollSpeed;
                            this.handleLoop();
                        }
                        this.scrollFrame = requestAnimationFrame(scroll);
                    };

                    this.scrollFrame = requestAnimationFrame(scroll);
                },

                pauseAutoScroll() {
                    clearInterval(this.scrollInterval);
                },
                resumeAutoScroll() {
                    this.startAutoScroll();
                },

                startDrag(e) {
                    this.isDragging = true;
                    this.pauseAutoScroll();
                    this.startX = e.type.includes('touch') ? e.touches[0].pageX : e.pageX;
                    this.scrollLeftStart = this.$refs.carousel.scrollLeft;
                    this.$refs.carousel.classList.add('grabbing');

                    // Jangan preventDefault pada touch (mobile)
                    if (!e.type.includes('touch')) e.preventDefault();
                },
                dragging(e) {
                    if (!this.isDragging) return;
                    const x = e.type.includes('touch') ? e.touches[0].pageX : e.pageX;
                    const walk = this.startX - x;
                    this.$refs.carousel.scrollLeft = this.scrollLeftStart + walk;

                    // Prevent hanya untuk mouse
                    if (!e.type.includes('touch')) e.preventDefault();
                },

                endDrag() {
                    if (this.isDragging) {
                        this.isDragging = false;
                        this.resumeAutoScroll();
                        this.$refs.carousel.classList.remove('grabbing');
                    }
                },
                handleLoop() {
                    const el = this.$refs.carousel;
                    const maxScroll = el.scrollWidth - el.clientWidth;
                    if (el.scrollLeft >= maxScroll) {
                        el.scrollLeft -= maxScroll;
                    }
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