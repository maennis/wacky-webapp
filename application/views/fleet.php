<div class="row">
    <table class="table table-striped table-dark" id="fleetTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Manufacturer</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            {fleet}
            <tr>
                <td>
                    <a href="/fleet/show/{id}">{id}</a>
                    {editLink}
                </td>
                <td>
                    {manufacturer}
                </td>
                <td>
                    {model}
                </td>
            </tr>
            {/fleet}
            {addLink}
        </tbody>
    </table>
</div>
