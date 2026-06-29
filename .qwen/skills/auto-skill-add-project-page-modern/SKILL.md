---
name: add-project-page-modern
description: Add a modern project category dropdown, featured projects grid, and healthcare carousel to the Projects Blade page.
source: auto-skill
extracted_at: '2026-06-24T09:02:00.000Z'
---

## Overview
This auto‑skill automates the redesign of the **Projects** page (`resources/views/project.blade.php`) to meet the new requirements:
- Keep the existing Hero banner.
- Insert a **Project Category Dropdown** (All, Healthcare, Commercial, Retail, Residential, Industrial) under the hero.
- Replace the current Featured Projects section with a modern responsive card grid.
- Add a **Healthcare Projects Carousel** using Swiper.js.
- Ensure each card includes image, title, short description, location, category badge, and a "View Details" button with hover animation.
- Remove the old *Project Credentials* slider.
- Preserve the existing FAQ and CTA sections.
- Use Tailwind CSS, Framer Motion‑style utilities (via Tailwind transitions), and Swiper for the carousel. All assets stay within the Laravel Blade ecosystem.

## Procedure
### 1. Open the Projects view
Locate the file:
```
resources/views/project.blade.php
```
Create a backup copy if desired.

### 2. Insert the Project Category Dropdown
Place the markup **directly below the Hero banner** (after the closing `</div>` of the hero section) and before the current filter buttons.
```blade
<!-- Project Category Dropdown -->
<div class="max-w-5xl mx-auto px-4 md:px-6 py-6" id="project-category-dropdown">
    <select onchange="filterByCategory(this.value)"
            class="w-full md:w-64 bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-500">
        <option value="all">All Projects</option>
        <option value="healthcare">Healthcare Projects</option>
        <option value="commercial">Commercial Projects</option>
        <option value="retail">Retail Projects</option>
        <option value="residential">Residential Projects</option>
        <option value="industrial">Industrial Projects</option>
    </select>
</div>
```
Add a small JavaScript helper at the bottom of the file (inside the existing `<script>` block or a new `<script>` tag) to filter the grid:
```html
<script>
    function filterByCategory(cat) {
        document.querySelectorAll('.project-card').forEach(card => {
            const matches = cat === 'all' || card.dataset.category === cat;
            card.classList.toggle('hidden', !matches);
        });
    }
</script>
```
### 3. Remove the old Project Credentials slider
Search for the markup containing `{{-- Project Credentials --}}` (in `home.blade.php` or within this file) and delete the entire `<section>` block that follows it.

### 4. Build the Featured Projects Grid
Replace the current filter button set (or keep it if you still want extra filters) with the modern card grid. Insert the following Blade snippet **after the dropdown** (or after the filter buttons if you keep them):
```blade
<!-- Featured Projects Grid -->
<section class="max-w-7xl mx-auto px-4 md:px-6 py-8" id="featured-projects">
    <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Featured Projects</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @foreach($featuredProjects as $project)
        <div class="project-card bg-white rounded-xl border border-gray-200 overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 flex flex-col" data-category="{{ $project->category }}">
            <div class="relative">
                <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                <span class="absolute top-3 left-3 bg-{{ $project->categoryColor ?? 'orange' }}-500 text-white text-xs font-bold uppercase px-2 py-1 rounded">
                    {{ ucfirst($project->category) }}
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $project->title }}</h3>
                <p class="text-sm text-gray-600 mb-3 flex-1">{{ Str::limit($project->short_description, 100) }}</p>
                <div class="flex items-center text-xs text-gray-500 mb-2">
                    <i data-lucide="map-pin" class="w-3.5 h-3.5 mr-1"></i>
                    <span>{{ $project->location }}</span>
                </div>
                <a href="{{ route('projects.show', $project) }}"
                   class="mt-auto inline-block w-full text-center bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded transition-colors duration-200">
                    View Details
                </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
```
**Notes:**
- `$project->categoryColor` can be a helper that returns a Tailwind color name (e.g., `orange`, `indigo`, `rose`).
- The `hover:shadow-xl` together with `transition-shadow` provides a subtle hover animation akin to Framer Motion.
- Ensure a controller passes `$featuredProjects` (e.g., the latest 8 projects) to the view.

### 5. Add the Healthcare Projects Carousel
Below the featured grid, insert the Swiper carousel markup:
```blade
<!-- Healthcare Projects Carousel -->
<section class="max-w-7xl mx-auto px-4 md:px-6 py-8" id="healthcare-carousel">
    <h2 class="text-2xl font-extrabold text-gray-900 mb-6">Healthcare Projects</h2>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            @foreach($healthcareProjects as $project)
            <div class="swiper-slide">
                <div class="bg-white rounded-xl overflow-hidden shadow-sm">
                    <img src="{{ $project->image }}" alt="{{ $project->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">{{ $project->title }}</h3>
                        <p class="text-sm text-gray-600">{{ Str::limit($project->short_description, 80) }}</p>
                        <a href="{{ route('projects.show', $project) }}"
                           class="mt-2 inline-block text-sm text-orange-600 hover:underline">View Details</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Navigation arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- Pagination dots -->
        <div class="swiper-pagination mt-4"></div>
    </div>
</section>
```
Add the Swiper initialization script (after the existing scripts):
```html
<script type="module">
    import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
    const swiper = new Swiper('.mySwiper', {
        modules: [Navigation, Pagination, Autoplay],
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            640: { slidesPerView: 2 },
            1024: { slidesPerView: 4 },
        },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        pagination: { el: '.swiper-pagination', clickable: true },
        autoplay: { delay: 5000, disableOnInteraction: false },
        loop: true,
    });
</script>
```
Make sure the `swiper` package is already installed (it is in `package.json`). If not, run `npm install swiper`.

### 6. Preserve FAQ and CTA sections
The existing FAQ and CTA markup resides at the bottom of `project.blade.php`. Do **not** modify those sections; ensure they remain after the new components.

### 7. Controller Adjustments
In the appropriate controller (e.g., `ProjectController@index`), gather the data:
```php
public function index()
{
    $featuredProjects = Project::whereIn('category', ['healthcare','commercial','retail','residential','industrial'])
        ->latest()
        ->take(12)
        ->get();

    $healthcareProjects = Project::where('category', 'healthcare')
        ->latest()
        ->take(8)
        ->get();

    return view('project', compact('featuredProjects', 'healthcareProjects'));
}
```
Add a `show` method for the detail page if not existent.

### 8. Create the Project Detail Blade (optional)
Create `resources/views/projects/show.blade.php` with the layout:
- Hero image (`$project->image`)
- Information block (title, location, category badge)
- Scope of Work section
- Full description
- Image gallery (use a simple Tailwind grid or another Swiper instance)
- Related projects (similar cards filtered by the same category)
- Contact CTA (reuse the existing CTA component).

### 9. Styling & Responsiveness
- Use Tailwind utility classes for spacing, typography, and colors that match the existing theme (`bg-slate-50`, `text-orange-500`, etc.).
- Verify breakpoints: `sm`, `md`, `lg`, `xl` for grid columns.
- Test on mobile (vertical) to ensure the dropdown, cards, and carousel adapt gracefully.

### 10. Test & Verify
1. Run `npm run dev` and `php artisan serve`.
2. Open the Projects page and check:
   - Hero banner unchanged.
   - Dropdown appears and filters the grid.
   - Featured cards display with hover shadow and correct badge colors.
   - Healthcare carousel auto‑plays, navigation works, and is swipe‑able.
   - No remnants of the old credentials slider.
   - FAQ and CTA sections remain.
3. Inspect page source for proper semantic HTML (use `<section>`, `<article>`, `<h2>` headings). Add `alt` attributes for images.
4. Run an accessibility audit (e.g., Lighthouse) to ensure good SEO scores.
5. Commit changes:
   ```bash
   git add resources/views/project.blade.php resources/views/projects/show.blade.php app/Http/Controllers/ProjectController.php
   git commit -m "Redesign Projects page: dropdown, modern featured grid, healthcare carousel"
   ```

## Customisation Tips
- **Badge colors**: map categories to Tailwind colors in a helper function.
- **Animations**: replace Tailwind `transition-shadow` with Framer Motion if you later migrate to a React component.
- **Data source**: you can pull projects from a JSON file, API, or database; just ensure the collection passed to the view has the required fields (`image`, `title`, `short_description`, `location`, `category`).

---
*Generated by the auto‑skill creation process on 2026‑06‑24.*