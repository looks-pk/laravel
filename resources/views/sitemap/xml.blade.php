<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach($sitemap['main'] as $page)
    <url>
        <loc>{{ $page['url'] }}</loc>
        <lastmod>{{ $page['lastmod'] }}</lastmod>
        <changefreq>{{ $page['changefreq'] }}</changefreq>
        <priority>{{ $page['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['services'] ?? [] as $service)
    <url>
        <loc>{{ $service['url'] }}</loc>
        <lastmod>{{ $service['lastmod'] }}</lastmod>
        <changefreq>{{ $service['changefreq'] }}</changefreq>
        <priority>{{ $service['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['custom_services'] ?? [] as $service)
    <url>
        <loc>{{ $service['url'] }}</loc>
        <lastmod>{{ $service['lastmod'] }}</lastmod>
        <changefreq>{{ $service['changefreq'] }}</changefreq>
        <priority>{{ $service['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['blog'] ?? [] as $post)
    <url>
        <loc>{{ $post['url'] }}</loc>
        <lastmod>{{ $post['lastmod'] }}</lastmod>
        <changefreq>{{ $post['changefreq'] }}</changefreq>
        <priority>{{ $post['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['product_categories'] ?? [] as $category)
    <url>
        <loc>{{ $category['url'] }}</loc>
        <lastmod>{{ $category['lastmod'] }}</lastmod>
        <changefreq>{{ $category['changefreq'] }}</changefreq>
        <priority>{{ $category['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['products'] ?? [] as $product)
    <url>
        <loc>{{ $product['url'] }}</loc>
        <lastmod>{{ $product['lastmod'] }}</lastmod>
        <changefreq>{{ $product['changefreq'] }}</changefreq>
        <priority>{{ $product['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['rental_categories'] ?? [] as $rental)
    <url>
        <loc>{{ $rental['url'] }}</loc>
        <lastmod>{{ $rental['lastmod'] }}</lastmod>
        <changefreq>{{ $rental['changefreq'] }}</changefreq>
        <priority>{{ $rental['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['areas'] ?? [] as $area)
    <url>
        <loc>{{ $area['url'] }}</loc>
        <lastmod>{{ $area['lastmod'] }}</lastmod>
        <changefreq>{{ $area['changefreq'] }}</changefreq>
        <priority>{{ $area['priority'] }}</priority>
    </url>
@endforeach

@foreach($sitemap['special'] ?? [] as $page)
    <url>
        <loc>{{ $page['url'] }}</loc>
        <lastmod>{{ $page['lastmod'] }}</lastmod>
        <changefreq>{{ $page['changefreq'] }}</changefreq>
        <priority>{{ $page['priority'] }}</priority>
    </url>
@endforeach
</urlset>
