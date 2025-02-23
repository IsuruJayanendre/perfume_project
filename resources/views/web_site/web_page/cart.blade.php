@include('web_site.component.nav_bar')


<div class="relative overflow-x-auto mx-auto max-w-screen-lg p-5">
    <table class="w-full text-sm text-left rtl:text-right text-gray-700 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-300  ">
            <tr>
                <th scope="col" class="px-6 py-3 rounded-s-lg">
                    Product name
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    price
                </th>
                <th scope="col" class="px-6 py-3 rounded-e-lg">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $cartitems as $cartitem )
            <tr class="bg-white ">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                    {{ $cartitem->post->topic ?? 'No topic available' }}
                </th>
                <td class="px-6 py-4">
                    {{ $cartitem->prod_qty }}
                </td>
                <td class="px-6 py-4">
                    {{ $cartitem->prod_id }}
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr class="font-semibold text-gray-900 bg-gray-300">
                <th scope="row" class="px-7 py-3 text-base">Total</th>
                <td class="px-6 py-3">3</td>
                <td class="px-6 py-3">21,000</td>
                <td class="px-6 py-3">Checkout</td>
            </tr>
        </tfoot>
    </table>
</div>


@include('web_site.component.footer')
