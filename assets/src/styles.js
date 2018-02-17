var gr8 = require('gr8-util')

var css = gr8({
  prop: 'display',
  vals: [
    'block',
    'inline-block',
    'inline',
    'table',
    'table-cell',
    'table-row',
    'flex',
    'none'
  ]
})

module.exports = css
