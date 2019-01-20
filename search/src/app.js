/* global instantsearch algoliasearch */

const search = instantsearch({
  indexName: 'products',
  searchClient: algoliasearch('9P1CWFU25C', '28ea6846ce645d18198c2f13a5dcaf84'),
});

search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#searchbox',
  })
);

search.addWidget(
  instantsearch.widgets.hits({
    container: '#hits',
    templates: {
      item: `
        <div>
          <img src="{{image}}" align="left" alt="{{name}} width="calc(50% - 1rem)" height="120"/>
          <div class="hit-name">
            <a href="{{url}}" target="_blank">{{#helpers.highlight}}{ "attribute": "name" }{{/helpers.highlight}}<a>

          </div>
          <div class="hit-description">
            {{#helpers.highlight}}{ "attribute": "description" }{{/helpers.highlight}}
          </div>
          <div class="hit-price">\${{price}}</div>
        </div>
      `,
    },
  })
);

search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination',
  })
);

search.start();
