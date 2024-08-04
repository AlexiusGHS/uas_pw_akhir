<div id="dataContainer">
        <!-- Initial Data -->
        <?php
            // $jumlahdata = jumlah kursus di count;
        ?>
        <!-- data yang di tampilkan 3 -->
        <div class="item">
            <div class="item-header" onclick="toggleSection(this)">Item 1</div>
            <div class="item-content">Content for Item 1</div>
        </div>
        <div class="item">
            <div class="item-header" onclick="toggleSection(this)">Item 2</div>
            <div class="item-content">Content for Item 2</div>
        </div>
        <div class="item">
            <div class="item-header" onclick="toggleSection(this)">Item 3</div>
            <div class="item-content">Content for Item 3</div>
        </div>
    </div>
    <button id="loadMoreButton" onclick="loadMoreData()">Load More</button>
    <button id="loadLessButton" onclick="loadLessData()" style="display: none;">Load Less</button>