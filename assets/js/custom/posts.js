Array.prototype.random = function () {
  return this[Math.floor((Math.random()*this.length))];
}
Object.defineProperty(String.prototype, 'capitalize', {
  value: function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
  },
  enumerable: false
});

let articles = []
const dateOptions = {year: 'numeric', month: 'short', day: 'numeric' };


document.addEventListener('DOMContentLoaded', async () => {
  const response = await fetch("articles.php")
  articles = await response.json();

  renderBlogArea()
  renderSidebarArticles()
  renderTags()

}, false);

const renderAllArticleCards = (articles, currentPage) => {
  const element = document.getElementById("card_container")
  element.innerHTML = ""

  let htmlToAppend = ""
  if (currentPage == 1){
    htmlToAppend = renderFirstArticleCard(articles[0], dateOptions)
    articles.shift()
  }

  articles.forEach(article => {
    htmlToAppend += renderArticleCard(article, dateOptions)
  });

  element.insertAdjacentHTML('beforeend', htmlToAppend);
}

const paginationClick = (page) => {
  renderBlogArea(page)
}

const renderPagination = (pagination) => {
  const element = document.getElementById("pagination_component")
  element.innerHTML = ""

  let htmlToAppend = ""

  pagination.pages.forEach(page => {
      htmlToAppend += `
        <li 
          class="page-item ${page == pagination.currentPage && "active"}"
          onClick="javascript:paginationClick(${page})"
        >
          <a class="page-link" href="#">${page}</a>
        </li>
      `;
  })

  element.insertAdjacentHTML('beforeend', htmlToAppend);
}

const renderBlogArea = (currentPage = 1) => {
  const middleArticles = articles.filter(e => e.group == "middle")
  const pagination = paginate(middleArticles.length, currentPage)

  renderAllArticleCards(middleArticles.slice(pagination.startIndex, pagination.endIndex+1), currentPage)
  renderPagination(pagination)
}

const renderFirstArticleCard = (article, dateOptions) => {
  return `
    <!-- Card -->
    <a class="card card-transition align-items-start flex-wrap flex-row bg-img-start" href="blog-article.php?article=${article.id}" style="background-image: url(assets/img/900x450/img1.jpg); min-height: 25rem;">
      <!-- Card Header -->
      <div class="card-header w-100">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <span class="avatar avatar-sm avatar-circle">
              <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h4 class="card-title text-white mb-0">${article.author || ""}</h4>
            <p class="card-text text-white-70 small">${new Date(article.createdAt).toLocaleDateString(undefined, dateOptions)}</p>
          </div>
        </div>
      </div>
      <!-- End Card Header -->

      <!-- Card Footer -->
      <div class="card-footer mt-auto">
        <h3 class="h2 text-white">${article.title || ""}</h3>
        <p class="text-white-70">${article.description || ""}</p>
      </div>
      <!-- End Card Footer -->
    </a>
    <!-- End Card -->
  `
}

const renderArticleCard = (article, dateOptions) => {
  return `
  <!-- Card -->
    <div class="card card-flush card-stretched-vertical">
      <div class="row">
        <div class="col-sm-5">
          <img class="card-img" src="assets/img/400x500/${article.main_image || ""}" alt="Image Description">
        </div>
        <!-- End Col -->

        <div class="col-sm-7">
          <!-- Card Body -->
          <div class="card-body">
           

            <h3 class="card-title">
              <a class="text-dark" href="blog-article.php?article=${article.id}">${article.title || ""}</a>
            </h3>
            
            <p class="card-text">${article.description || ""}</p>
            
            <!-- Card Footer -->
            <div class="card-footer">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <a class="avatar avatar-circle" href="/blog-author-profile.html">
                    <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                  </a>
                </div>
              
                <div class="flex-grow-1 ms-3">
                  <a class="card-link link-dark" href="/blog-author-profile.html">${article.author || ""}</a>
                  <p class="card-text small">${new Date(article.createdAt).toLocaleDateString(undefined, dateOptions)}</p>
                </div>
              </div>
            </div>
            <!-- End Card Footer -->
          </div>
          <!-- End Card Body -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Card -->
  `
}

const renderSidebarArticles = () => {
  renderFirstGroupArticles(articles.filter(e => e.group == "right_up"))
  renderSecondGroupArticles(articles.filter(e => e.group == "right_down"))
}

const renderFirstGroupArticles = (articles) => {
  const element = document.getElementById("first_group_list")
  element.innerHTML = ""

  let htmlToAppend = ""

  articles.forEach(article => {
    htmlToAppend += `
      <!-- Item -->
        <li class="list-group-item">
        <a href="blog-article.php?article=${article.id}">
          <div class="row align-items-center">
            <div class="col">
              <h5 class="mb-1">${article.title}</h5>
              <p class="text-body small mb-0">${new Date(article.createdAt).toLocaleDateString(undefined, dateOptions)}</p>
            </div>
            <!-- End Col -->

            <div class="col-auto">
              <i class="bi-chevron-right"></i>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </a>
      </li>
      <!-- End Item -->
    `
  })

  element.insertAdjacentHTML('beforeend', htmlToAppend);
}

const renderSecondGroupArticles = (articles) => {
  const element = document.getElementById("second_group_list")
  element.innerHTML = ""

  let htmlToAppend = ""

  articles.forEach(article => {
    htmlToAppend += `
      <!-- Card -->
      <a class="d-block" href="blog-article.php?article=${article.id}">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <div class="avatar avatar-lg">
              <img class="avatar-img" src="assets/img/320x320/${article.main_image || ""}" alt="Image Description">
            </div>
          </div>
          <div class="flex-grow-1 ms-3">
            <h5 class="text-inherit mb-0">${article.title}</h5>
          </div>
        </div>
      </a>
      <!-- End Card -->
    `
  })

  element.insertAdjacentHTML('beforeend', htmlToAppend);
}

const renderTags = () => {
  const tags = []
  articles.map(e => {
    e.tags?.split(",").map(t => tags.push(t.trim().capitalize()))
  })

  const element = document.getElementById("tags")

  let htmlToAppend = ""

  tags.forEach(tag => {
    htmlToAppend += `
      <a class="btn btn-soft-secondary btn-xs mb-1" href="#">${tag}</a>
    `
  })

  element.insertAdjacentHTML('beforeend', htmlToAppend);
  
}