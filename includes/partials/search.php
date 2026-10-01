        <!-- ═══ Search ═══ -->
        <div class="search-panel" id="searchPanel" hidden>
          <div class="page-shell">
            <form class="search-form" role="search" action="#" method="get">
              <label class="visually-hidden" for="siteSearch"
                >Search <?= SITE_NAME ?></label
              >
              <i class="bi bi-search search-icon" aria-hidden="true"></i>
              <input
                class="search-input"
                id="siteSearch"
                type="search"
                name="q"
                placeholder="Search <?= SITE_NAME ?>&hellip;"
                autocomplete="off"
              />
              <button type="submit" class="search-submit">Search</button>
              <button
                type="button"
                class="search-close"
                aria-label="Close search"
              >
                <i class="bi bi-x-lg" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
