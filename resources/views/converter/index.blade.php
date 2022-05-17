<form action="{{ route('converter.result') }}" method="post">
    @csrf
    <input name="money" type="number" />
    <select name="from" class="form-control">
        <option value="BYN">BYN</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
    </select>
    <select name="to" class="form-control">
        <option value="BYN">BYN</option>
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
    </select>
    <button type="submit">Result</button>
</form>
