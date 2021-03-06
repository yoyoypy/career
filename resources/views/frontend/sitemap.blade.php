<?xml version="1.0" encoding="UTF-8"?>
<urlset
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">


            <url>
                <loc>https://karir.sadhanas.co.id/</loc>
                <lastmod>2021-10-29T07:14:12+00:00</lastmod>
                <priority>1.00</priority>
              </url>
              <url>
                <loc>https://karir.sadhanas.co.id/job-list</loc>
                <lastmod>2021-10-29T07:14:12+00:00</lastmod>
                <priority>0.80</priority>
              </url>
              <url>
                <loc>https://karir.sadhanas.co.id/blog</loc>
                <lastmod>2021-10-29T07:14:12+00:00</lastmod>
                <priority>0.80</priority>
              </url>
              <url>
                <loc>https://karir.sadhanas.co.id/contact-us</loc>
                <lastmod>2021-10-29T07:14:12+00:00</lastmod>
                <priority>0.80</priority>
              </url>
            @foreach ($jobs as $job)
            <url>
                <loc>{{ url('job',$job->slug) }}</loc>
                <lastmod>{{ $job->updated_at->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
            </url>
            @endforeach
            @foreach ($blogs as $blog)
            <url>
                <loc>{{ url('blog', $blog->slug) }}</loc>
                <lastmod>{{ $job->updated_at->toAtomString() }}</lastmod>
                <changefreq>weekly</changefreq>
                <priority>0.80</priority>
            </url>
            @endforeach
</urlset>
