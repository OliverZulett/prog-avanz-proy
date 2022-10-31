<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Tailwind One Page Template | Tailone</title>
  <meta name="description" content="Tailwind One Page Template">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/prism.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&amp;display=swap" rel="stylesheet">

  <link rel="icon" href="../img/favicon.jpg">
</head>

<body class="text-gray-700">
  
  <? include '../components/loader.php' ?>

  <? include '../components/header.php' ?>

  <!-- =========={ MAIN }==========  -->
  <main id="content" class="pt-20">
    <!-- block news -->
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full  overflow-hidden">
            <div class="p-7 rounded bg-white">
              <div class="mb-6">
                <h1 class="text-4xl mb-4 font-semibold text-gray-800">Introduction</h1>
                <p class="text-gray-600 leading-relaxed font-light text-xl mx-auto pb-2">Tailone is Tailwind css one page template with simple design and fast loading. This template is perfect for make awesome digital agency site.</p>
              </div>

              <div class="mb-6">
                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Production Starter template</h2>
                <p class="mb-4">This is starter template with production files.</p>
                <pre>
                  <code class="language-html" data-lang="html">
                    &lt;!doctype html&gt;
                    &lt;html lang="en" dir="ltr"&gt;
                      &lt;head&gt;
                        &lt;!-- Title --&gt;
                        &lt;title&gt;Hello, world!&lt;/title&gt;

                        &lt;!-- Required meta tags --&gt;
                        &lt;meta charset="UTF-8"&gt;
                        &lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"&gt;

                        &lt;!-- Favicon  --&gt;
                        &lt;link rel="icon" href="../img/favicon.jpg"&gt;

                        &lt;!--Google Fonts--&gt;
                        &lt;link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&display=swap" rel="stylesheet"&gt;

                        &lt;!--Styles--&gt;
                        &lt;link rel="stylesheet" href="dist/css/style.css"&gt;
                      &lt;/head&gt;

                      &lt;body class="text-gray-700 pt-9 sm:pt-10"&gt;
                        &lt;h1&gt;Hello, world!&lt;/h1&gt;

                        &lt;!-- =========={ JAVASCRIPT }==========  --&gt;
                        &lt;script src="dist/js/scripts.js"&gt;&lt;/script&gt;
                      &lt;/body&gt;
                    &lt;/html&gt;
                    </html>
                  </code>
                </pre>
              </div>

              <div class="mt-12 mb-6">
                <h2 class="text-4xl mb-4 font-semibold text-gray-800">Build tools</h2>
                <p class="text-gray-600 leading-relaxed font-light text-xl mx-auto pb-2">Learn how to use Tailone included npm scripts to automate your time-consuming tasks in your development workflow with Gulp, Browsersync and PostCSS.</p>
              </div>
            
              <div class="mb-8">
                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Tooling setup</h2>
                <p class="mb-4">Tailone uses NPM scripts for its build system. Our <code class="text-pink-700">package.json</code> includes convenient methods for working with the framework, including compiling code, running tests, and more.</p>
                <p>To use our build system and run our documentation locally, you'll need a copy of Tailone's source files and Node. Follow these steps and you should be ready to rock:</p>
                <ul class="list-decimal list-inside pl-8 my-4">
                  <li class="mb-2"><a class="text-blue-700" href="https://nodejs.org/download/">Download and install Node.js</a>, which we use to manage our dependencies.</li>
                  <li class="mb-2">Run <code class="text-pink-700">npm install --global gulp-cli</code> command. If you already installed Gulp CLI previously, you can skip this step and jump to step 3.</li>
                  <li class="mb-2">Navigate to the root <code class="text-pink-700">Tailone/</code> directory and run <code class="text-pink-700">npm install</code>.</li>
                  <li class="mb-2">After Npm install complete, run <code class="text-pink-700">npm run start</code> to start development.</li>
                </ul>
                <p>Yup, that's it.</p>
              </div>

              <div id="gulps" class="mb-8">
                <h2 class="text-2xl mb-2 font-semibold text-gray-800">Gulp, Sass and Browsersync</h2>
                <p class="mb-4">When install processing completed, you'll be able to run the various commands provided from the command line. Now you have an integrated workflow.</p>
                <p class="mb-4">Our <code class="text-pink-700">gulpfile.js</code> includes the following tasks:</p>
                <table class="table-auto">
                  <thead class="bg-gray-100">
                    <tr class="border border-gray-200">
                      <th class="py-2">Core Task</th>
                      <th class="py-2">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium"><code class="text-pink-700">npm run start</code></td>
                      <td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium">Start development process with generate <code class="text-pink-700">../tailwind/*.css</code> to <code class="text-pink-700">../css/style.css</code> and launch Browsersync in <code class="text-pink-700">http://localhost:3100/</code> with automate page reload</td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium"><code class="text-pink-700">npm run build</code></td>
                      <td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium">Generates a <code class="text-pink-700">dist/</code> directory with all the production files <code class="text-pink-700">Minify css and js files</code></td>
                    </tr>
                    <tr>
                      <td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium"><code class="text-pink-700">npm run updatevendors</code></td>
                      <td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium">Update all vendors in <code class="text-pink-700">../vendors/*</code> with new version. Dont forget to run <code class="text-pink-700">npm update</code> before running this task. You can running this task before start development process.</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <h4 class="text-xl mb-2 font-semibold text-gray-800 text-primary">WARNING</h4>
                <p class="mb-4">If you are using MacOS please use <code class="text-pink-700">sudo</code> keyword in the command because they need administrator rights to install Gulp globally.</p>
              </div>
            </div>
          </div>

          <!-- right -->
          <!-- <div class="flex-shrink max-w-full w-full lg:w-1/5 lg:pl-8 order-first">
            <div class="w-full">
              <ul id="side-menu" class="w-full float-none flex flex-col font-medium">

                <li class="relative">
                  <div id="mobiledrop-01" class="block py-2 px-4 hover:text-blue-700">
                    Getting started
                  </div>

                  <ul class="block rounded rounded-t-none top-full z-50 pl-3 py-0.5 text-left mb-1 font-normal" style="min-width: 12rem">
                    <li class="relative inline-block lg:block">
                      <a class="text-blue-700 block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="index.html">Introduction</a>
                    </li>
                    <li class="relative inline-block lg:block">
                      <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="customize.html">Customize</a>
                    </li>
                    <li class="relative inline-block lg:block">
                      <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="components.html">Components</a>
                    </li>
                    <li class="relative inline-block lg:block">
                      <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="credits.html">Credits</a>
                    </li>
                    <li class="relative inline-block lg:block">
                      <a class="block w-full py-2 px-4 clear-both whitespace-nowrap hover:text-blue-700" href="changelogs.html">Changelog</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </main><!-- end main -->

  <? include '../components/footer.php' ?>
  
  <? include '../components/scroller.php' ?>

  <!--Vendor js-->
  <script src="../vendors/glightbox/dist/js/glightbox.min.js"></script>
  <script src="../vendors/@splidejs/splide/dist/js/splide.min.js"></script>
  <script src="../vendors/typed.js/lib/typed.min.js"></script>
  <script src="../vendors/wow.js/dist/wow.min.js"></script>
  <script src="../vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  
  <!-- Start development js -->
  <script src="../js/theme.js"></script>
  <!-- End development js -->

  <!-- prism js -->
  <script src="../js/prism.js"></script>

  <!-- Production js -->
  <!-- <script src="dist/js/scripts.js"></script> -->
</body>
</html>