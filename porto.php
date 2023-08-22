<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="path_to_your_css_file.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100">
    <?php
        // Example PHP code
        $name = "Muhammad Faqih Al Firdaus";
    ?>
    <section id="home" class="min-h-screen flex justify-center items-center">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full px-4 lg:w-1/2 text-center lg:text-left">
                    <h1 class="text-base font-semibold text-gru md:text-xl mb-2">Hello, My Name</h1>
                    <h1 class="block font-bold text-dark text-4xl lg:text-5xl mb-4" id="typed-text"><?php echo $name; ?></h1>
                    <h2 class="font-medium text-gru text-lg mb-2 lg:text-2xl">Saya Merupakan Seorang Mahasiswa</h2>
                    <h2 class="font-medium text-gru text-lg mb-5 lg:text-2xl">Teknik Elektro <br> Universitas Singaperbangsa Karawang</h2>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="fotoFaqih.png" alt="FAQIH" class="max-w-sm mx-auto">
                        <span class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#64748b" d="M69,-20.9C76.5,0.7,60.8,31.4,36.2,49.1C11.5,66.8,-22,71.6,-36.5,59C-51,46.4,-46.5,16.4,-37.3,-7.7C-28,-31.7,-14,-49.7,8.4,-52.5C30.8,-55.2,61.5,-42.6,69,-20.9Z" transform="translate(100 100) scale(1.1)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Text typing animation
        const texts = ["Muhammad Faqih Al Firdaus"];
        let count = 0;
        let index = 0;
        let currentText = "";
        let letter = "";

        (function type() {
            if (count === texts.length) {
                count = 0;
            }
            currentText = texts[count];
            letter = currentText.slice(0, ++index);

            document.getElementById("typed-text").textContent = letter;
            if (letter.length === currentText.length) {
                count++;
                index = 0;
            }
            setTimeout(type, 200);
        })();
    </script>
</body>
</html>
