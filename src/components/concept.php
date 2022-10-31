<head>
  <link rel="stylesheet" href="src/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;700&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="src/img/favicon.jpg">
  <link rel="stylesheet" href="src/css/prism.css">
</head>

<body class="text-gray-700">
	<!-- preloader -->
	<div class="preloader loaded-success fixed inset-0 z-50 bg-gray-50">
	  <div class="absolute left-1/2 top-1/2 transform -translate-y-1/2">
	    <div class="relative mx-auto my-12">
	      <div class="inline-block">
	        <svg class="animate-spin h-8 w-8 text-blue-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
	          <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
	          <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
	        </svg>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- =========={ MAIN }==========  -->
	<main id="content">
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
												&lt;link rel="icon" href="src/img/favicon.jpg"&gt;

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
											<td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium">Start development process with generate <code class="text-pink-700">src/tailwind/*.css</code> to <code class="text-pink-700">src/css/style.css</code> and launch Browsersync in <code class="text-pink-700">http://localhost:3100/</code> with automate page reload</td>
										</tr>
										<tr>
											<td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium"><code class="text-pink-700">npm run build</code></td>
											<td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium">Generates a <code class="text-pink-700">dist/</code> directory with all the production files <code class="text-pink-700">Minify css and js files</code></td>
										</tr>
										<tr>
											<td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium"><code class="text-pink-700">npm run updatevendors</code></td>
											<td class="border border-gray-200 px-4 py-2 text-gray-600 font-medium">Update all vendors in <code class="text-pink-700">src/vendors/*</code> with new version. Dont forget to run <code class="text-pink-700">npm update</code> before running this task. You can running this task before start development process.</td>
										</tr>
									</tbody>
								</table>
								<br>
								<h4 class="text-xl mb-2 font-semibold text-gray-800 text-primary">WARNING</h4>
								<p class="mb-4">If you are using MacOS please use <code class="text-pink-700">sudo</code> keyword in the command because they need administrator rights to install Gulp globally.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- end main -->

  <!-- =========={ SCROLL TO TOP }==========  -->
  <a href="#" class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden" aria-label="Scroll To Top">
    <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
      <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
    </svg>
  </a>

  <!--Vendor js-->
  <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
  <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
  <script src="src/vendors/typed.js/lib/typed.min.js"></script>
  <script src="src/vendors/wow.js/dist/wow.min.js"></script>
  <script src="src/vendors/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  
  <!-- Start development js -->
  <script src="src/js/theme.js"></script>
  <!-- End development js -->
	
  <!-- prism js -->
  <script src="src/js/prism.js"></script>

  <!-- Production js -->
  <!-- <script src="dist/js/scripts.js"></script> -->
</body>
</html>