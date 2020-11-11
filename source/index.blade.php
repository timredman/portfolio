@extends('_layouts.master')

@section('body')

<ul class="fixed top-0 left-0 flex flex-row justify-center w-full text-white">
  <li class="py-4 px-2 nav-links hidden-transition"><a class="link-hover" href="#work">Projects</a></li>
  <li class="absolute right-0 top-0 p-3 border-pink-700 hidden-transition hidden" id="back-to-top"><a href="#home"><i class="fas fa-arrow-circle-up fa-2x border border-pink-700 rounded-full bg-pink-700"></i></a></li>
</ul>

<div id="home" class="container mx-auto text-center text-white">
  <div class="flex flex-col items-center text-white justify-center h-screen">
    <div class="flex flex-col items-center">
      <img class="w-32 h-32 rounded-full border border-solid" src="/assets/images/profile.jpg" alt="Profile Picture" />

      <h1 class="mt-4 text-5xl">Tim Redman</h1>

      <p class="font-light">Senior Developer at <a href="https://www.thinkingjuice.co.uk" title="ThinkingJuice" class="text-pink-700 hover:text-pink-600 font-medium">ThinkingJuice</a></p>

      <div class="flex">
        <p class="m-2"><a class="text-pink-700 hover:text-pink-600 font-medium" href="mailto:tim.redman@gmail.com">tim.redman@gmail.com</a></p>
        <p class="m-2"><a class="text-pink-700 hover:text-pink-600 font-medium" href="https://www.linkedin.com/in/timredman/">LinkedIn</a></p>
      </div>
    </div>
  </div>

  <!-- Work examples -->
  <div id="work" class="container p-1 mx-auto text-white">
    <h2 class="text-xl pb-8">Projects</h2>

    <div class="flex flex-wrap -mx-2 overflow-hidden sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-4 sm:mb-6 md:mb-8 lg:mb-8 xl:mb-8 px-4">
        <div class="w-full rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/canine-partners.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-700 mb-3">Canine Partners</h2>
            <p class="text-gray-700 text-base">
              Rebuild of the Canine Partners website, with a big focus on usability and user experience.
            </p>
            <p class="mt-3">
              <a class="text-pink-700 hover:text-pink-600" href="https://www.caninepartners.org.uk">caninepartners.org.uk</a>
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Wordpress</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Google Maps API</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">jQuery</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">SASS</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mb-2">Digital Ocean</span>
          </div>
          <div class="px-6 py-4">
            <p class="text-gray-700 text-sm">Whilst working at <a class="text-pink-700 hover:text-pink-600" href="https://chs.agency/">CHS</a></p>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-4 sm:mb-6 md:mb-8 lg:mb-8 xl:mb-8 px-4">
        <div class="w-full rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/landlords.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-700 mb-3">National Landlords Association</h2>
            <p class="text-gray-700 text-base">
              Replacing legacy CRM with Microsoft Dynamics platform, ongoing Drupal support and ad-hoc projects.
            </p>
            <p class="mt-3">
              <a class="text-pink-700 hover:text-pink-600" href="https://www.landlords.org.uk">landlords.org.uk</a>
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Drupal 8</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Gulp</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Composer</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Docker</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Rackspace</span>
          </div>
          <div class="px-6 py-4">
            <p class="text-gray-700 text-sm">Whilst working at <a class="text-pink-700 hover:text-pink-600" href="https://brightblueday.com/">BrightBlueDay</a></p>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-4 sm:mb-6 md:mb-8 lg:mb-8 xl:mb-8 px-4">
        <div class="w-full rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/kfc.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-700 mb-3">KFC</h2>
            <p class="text-gray-700 text-base">
              Ongoing support and development of the brand headless API. Rebuilding the careers platform.
            </p>
            <p class="mt-3">
              <a class="text-pink-700 hover:text-pink-600" href="https://www.kfc.co.uk">kfc.co.uk</a>
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Drupal 8</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Headless</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Composer</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">AWS</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Docker</span>
          </div>
          <div class="px-6 py-4">
            <p class="text-gray-700 text-sm">Whilst working at <a class="text-pink-700 hover:text-pink-600" href="https://www.thinkingjuice.co.uk/">ThinkingJuice</a></p>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-4 sm:mb-6 md:mb-8 lg:mb-8 xl:mb-8 px-4">
        <div class="w-full rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/williamrussell.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-700 mb-3">William Russell</h2>
            <p class="text-gray-700 text-base">
              Rebrand and rebuild of primary brand site. Creation of new regional microsites.
            </p>
            <p class="mt-3">
              <a class="text-pink-700 hover:text-pink-600" href="https://www.william-russell.com">william-russell.com</a>
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Worpdress</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">WPML</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Webpack</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Mutlisites</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Sage Roots</span>
          </div>
          <div class="px-6 py-4">
            <p class="text-gray-700 text-sm">Whilst working at <a class="text-pink-700 hover:text-pink-600" href="https://brightblueday.com/">BrightBlueDay</a></p>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-4 sm:mb-6 md:mb-8 lg:mb-8 xl:mb-8 px-4">
        <div class="w-full rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/vitalitycomparisontool.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-700 mb-3">Vitality Comparison Tool</h2>
            <p class="text-gray-700 text-base">
              Laravel CMS build to work with Angular JS front-end plus server maintenance and administration
            </p>
            <p class="mt-3">
              <a class="text-pink-700 hover:text-pink-600" href="https://vitalityillnesscomparisontool.co.uk/">vitalityillnesscomparisontool.co.uk</a>
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Laravel</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Angular</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Rackspace</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Composer</span>
          </div>
          <div class="px-6 py-4">
            <p class="text-gray-700 text-sm">Whilst working at <a class="text-pink-700 hover:text-pink-600" href="https://brightblueday.com/">BrightBlueDay</a></p>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-4 sm:mb-6 md:mb-8 lg:mb-8 xl:mb-8 px-4">
        <div class="w-full rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/rebel-moments.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-2xl text-gray-700 mb-3">Rebel Moments</h2>
            <p class="text-gray-700 text-base">
              On-going support, development/integration work with printer API's and MediaClip design tools.
            </p>
            <p class="mt-3">
              <a class="text-pink-700 hover:text-pink-600" href="https://www.rebelmoments.com/">rebelmoments.com</a>
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Wordpres</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">WooCommerce</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Composer</span>
          </div>
          <div class="px-6 py-4">
            <p class="text-gray-700 text-sm">Whilst working at <a class="text-pink-700 hover:text-pink-600" href="https://www.thinkingjuice.co.uk/">ThinkingJuice</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w-full text-center pb-8">
  <p class="text-white">
    Kindly hosted by
    <a class="text-pink-700 hover:text-pink-600" href="https://www.netlify.com/">Netflify</a>
  </p>
  <p class="text-white">
    Powered by
    <a class="text-pink-700 hover:text-pink-600" href="https://jigsaw.tighten.co/">Jigsaw</a> and
    <a class="text-pink-700 hover:text-pink-600" href="https://tailwindcss.com/">Tailwind</a>
  </p>
</div>

@endsection
