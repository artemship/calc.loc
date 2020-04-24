<script src="/js/cabinet/users.js"></script>
<form action="/cabinet/users" method="post">

    <div class="flex-row" style="justify-content: space-between; margin-bottom: 15px">
        <div>
<!--            <select name="usersPerPage" onchange="this.form.submit()">-->
            <select id="js-amount-per-page">
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="15">15</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <label id="js-test-sort">На странице</label>
        </div>
        <input id="js-search-users" type="text" placeholder="Поиск">
    </div>

    <div class="cabinet_users_table" id="js-users-table">
        <!--JS Insert table-->
    </div>

    <div class="navigation" id="js-navigation">
        <!--JS Insert page navigation-->
    </div>


</form>