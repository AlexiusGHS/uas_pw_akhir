const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

/*blog*/
let currentItemIndex = 3;
        const maxItems = 10; // Example maximum number of items to load
        const increment = 3; // Number of items to load or unload

        function loadMoreData() {
            const dataContainer = document.getElementById('dataContainer');

            for (let i = 0; i < increment; i++) {
                currentItemIndex++;
                const newItem = document.createElement('div');
                newItem.className = 'item';
                newItem.innerHTML = `
                    <div class="item-header" onclick="toggleSection(this)">Item ${currentItemIndex}</div>
                    <div class="item-content">Content for Item ${currentItemIndex}</div>
                `;
                dataContainer.appendChild(newItem);
            }

            const loadMoreButton = document.getElementById('loadMoreButton');
            const loadLessButton = document.getElementById('loadLessButton');

            // Hide Load More button if max items reached
            if (currentItemIndex >= maxItems) {
                loadMoreButton.style.display = 'none';
            }
            loadLessButton.style.display = 'inline-block';
        }

        function loadLessData() {
            const dataContainer = document.getElementById('dataContainer');
            
            for (let i = 0; i < increment; i++) {
                if (currentItemIndex <= 3) break; // Always keep the initial 5 items
                dataContainer.removeChild(dataContainer.lastChild);
                currentItemIndex--;
            }

            const loadMoreButton = document.getElementById('loadMoreButton');
            const loadLessButton = document.getElementById('loadLessButton');

            // Show Load More button if less than max items
            if (currentItemIndex < maxItems) {
                loadMoreButton.style.display = 'inline-block';
            }

            // Hide Load Less button if only initial items left
            if (currentItemIndex <= 3) {
                loadLessButton.style.display = 'none';
            }
        }

        function toggleSection(element) {
            const content = element.nextElementSibling;
            content.style.display = content.style.display === 'block' ? 'none' : 'block';
        }
