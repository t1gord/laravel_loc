<div class="card card-portfolio">
    <div class="card-img">
        <img src="{{ $art->image }}" alt="Image">
    </div>
    <div class="card-body">
        <h2 class="h4 mb-2">
            <a href="portfolio-single-project.html" class="stretched-link">{{ $art->name }}</a>
        </h2>
        <div class="card-portfolio-meta">
            <span class="text-muted">{{ $art->category_id }}</span>
        </div>
    </div>
</div>
