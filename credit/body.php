<div class="content">
    <form action="order.php" method="post" class="form-credit">
        <div id="ranges">
            <h3>Расчитать кредит</h3>
            <div class="cols">
                <div class="left">
                    <label>
                        <div>
                            <span>Сумма кредита</span>
                            <span id="cost">10000 Рублей</span>
                        </div>
                        <input id="rangeMoney" type="range" name="" min="10000" max="5000000" step="10000" value="10000">
                    </label>
                    <label>
                        <div>
                            <span>Срок кредита</span>
                            <span id="month">24 Месяца</span>
                        </div>
                        <input id="rangeMonth" type="range" name="" min="24" max="60" step="12" value="24">
                    </label>
                </div>
                <div class="right">
                    <div class="payment">
                        <div>
                            <p>Ежемесячный платеж (5,5%)</p>
                            <p id="price"></p>
                        </div>
                        <a href="#form" class="btn link">Оформить кредит</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-credit-data" id="form">
            <label>Фамилия<input type="text" name="fullname"></label>
            <label>Имя<input type="text" name="fullname"></label>
            <label>Отчество<input type="text" name="fullname"></label>
            <label>Пол
                <label><input type="radio" name="gender" id="" value="М">Мужской</label>
                <label><input type="radio" name="gender" id="" value="Ж">Женский</label>
            <label>Мобильный телефон<input type="text" name="fullname"></label>
            <input type="submit" value="Отправить заявку">
        </div>
    </form>
    
</div>
<script>
    var rangeMoney = document.querySelector("#rangeMoney");
    var rangeMonth = document.querySelector("#rangeMonth");
    var cost = document.querySelector("#cost");
    var month = document.querySelector("#month");
    var price = document.querySelector("#price");
    cost.innerHTML = rangeMoney.value + " Рублей";
    rangeMoney.addEventListener("input", function() {
        cost.innerHTML = rangeMoney.value + " Рублей";
        getPayment();
    }, false);
    rangeMonth.addEventListener("input", function() {
        if(rangeMonth.value == 24)
            month.innerHTML = rangeMonth.value + " Месяца";
        else
            month.innerHTML = rangeMonth.value + " Месяцев";
        getPayment();
    }, false);
    function getPayment(){
        var payOnMonth = rangeMoney.value / rangeMonth.value;
        var percent = payOnMonth * 0.055;
        price.innerHTML = Math.round(payOnMonth + percent) + " Рублей";
    }
</script>