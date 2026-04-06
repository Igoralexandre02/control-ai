import { Grid } from 'gridjs'

document.addEventListener('DOMContentLoaded', () => {
    // ✅ GUARDA a instância
    new Grid({
        columns: ['Name', 'Email', 'Phone Number'],
        search: true,
        pagination: {
            limit: 2
        },
        language: {
            search: {
                placeholder: 'Pesquisar'
            },
            pagination: {
                previous: '<',
                next: '>',

                showing: 'Mostrando',
                to: 'a',
                of: 'de',
                results: () => 'registros'
            }
        },

        data: [
            ['John', 'john@example.com', '(353) 01 222 3333'],
            ['Mark', 'mark@gmail.com', '(01) 22 888 4444'],
            ['Eoin', 'eo3n@yahoo.com', '(05) 10 878 5554'],
            ['Nisen', 'nis900@gmail.com', '313 333 1923']
        ],

        className: {
            td: 'px-5 py-5'
        }
    }).render(document.getElementById('table'))
})
