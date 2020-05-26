@extends('_layouts.master')

@section('body')

<ul class="fixed top-0 left-0 flex flex-row justify-center w-full text-white">
  <li class="py-4 px-2 nav-links"><a class="link-hover" href="#work">Work</a></li>
  <li class="py-4 px-2 nav-links"><a class="link-hover" href="#contact">Contact</a></li>
  <li class="absolute right-0 top-0 p-3 border-pink-700"><a href="#home"><i class="fas fa-arrow-circle-up fa-2x border border-pink-700 rounded-full bg-pink-700"></i></a></li>
</ul>

<div id="home" class="container mx-auto text-center text-white">
  <div class="flex flex-col items-center text-white justify-center h-screen">
    <div class="flex flex-col items-center">
      <img class="w-32 h-32 rounded-full border border-solid" src="/assets/images/profile.jpg" alt="Profile Picture"/>

      <h1 class="mt-4 text-5xl">Tim Redman</h1>

      <p class="font-light">Senior Developer at <a href="https://www.thinkingjuice.co.uk" title="ThinkingJuice" class="text-pink-700 hover:text-pink-600 font-medium">ThinkingJuice</a></p>

      {{-- <p><a data-scroll href="#work" title="BrightBlueDay" class="inline-block mt-4 bg-pink-700 hover:bg-pink-600 text-white font-bold py-1 rounded-full">Portfolio</a></p> --}}
    </div>
  </div>

  <!-- Work examples -->
  <div id="work" class="container p-1 mx-auto text-white h-screen">
    <h2 class="text-xl pb-4">Previous Projects</h2>

    <div class="flex flex-wrap -mx-2 overflow-hidden sm:-mx-2 md:-mx-2 lg:-mx-2 xl:-mx-2">

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-8 px-4">
        <div class="rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/canine-partners.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-xl text-gray-700 mb-2">Canine Partners</h2>
            <p class="text-gray-700 text-base">
              Rebuild of the Canine Partners website, with a big focus on usability and user experience.
            </p>
            <a class="text-gray-700" href="https://www.caninepartners.org.uk">caninepartners.org.uk</a>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Wordpress</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Google Maps API</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">jQuery</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">SASS</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mb-2">Digital Ocean</span>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-8 px-4">
        <div class="rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/landlords.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-xl text-gray-700 mb-2">National Landlords Association</h2>
            <p class="text-gray-700 text-base">
              Replacing legacy CRM with Microsoft Dynamics platform, ongoing support and ad-hoc projects.
            </p>
            <a class="text-gray-700" href="https://www.landlords.org.uk">landlords.org.uk</a>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Drupal 8</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Gulp</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Composer</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Docker</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Rackspace</span>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-8 px-4">
        <div class="rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/kfc.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-xl text-gray-700 mb-2">KFC</h2>
            <p class="text-gray-700 text-base">
              Ongoing support of the brand platform, and re-build of the Careers sections.  
            </p>
            <a class="text-gray-700" href="https://www.kfc.co.uk">kfc.co.uk</a>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Drupal 8</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Headless</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Docker</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">AWS</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Docker</span>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-8 px-4">
        <div class="rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/williamrussell.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-xl text-gray-700 mb-2">William Russell</h2>
            <p class="text-gray-700 text-base">
              Rebrand and new build of Primary Brand site, plus regional microsites.
            </p>
            <a class="text-gray-700" href="https://www.william-russell.com">william-russell.com</a>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Worpdress</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">WPML</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Webpack</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Mutlisite</span>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-8 px-4">
        <div class="rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/canine-partners.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-xl text-gray-700 mb-2">National Landlords Association</h2>
            <p class="text-gray-700 text-base">
              Work to integrate with the new Microsoft Dynamics platform, ongoing support and ad-hoc projects.
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Drupal 8</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Gulp</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">NPM</span>
          </div>
        </div>
      </div>

      <div class="flex w-full sm:w-1/2 md:w-1/2 lg:w-1/2 xl:w-1/3 mb-8 px-4">
        <div class="rounded overflow-hidden shadow-lg bg-white">
          <img class="w-full" src="../assets/images/canine-partners.png" alt="Sunset in the mountains">
          <div class="px-6 py-4">
            <h2 class="font-bold text-xl text-gray-700 mb-2">National Landlords Association</h2>
            <p class="text-gray-700 text-base">
              Work to integrate with the new Microsoft Dynamics platform, ongoing support and ad-hoc projects.
            </p>
          </div>
          <div class="px-6 py-4">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Drupal 8</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Gulp</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">NPM</span>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>
@endsection
