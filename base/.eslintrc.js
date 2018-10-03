
// https://eslint.org/docs/user-guide/configuring

module.exports = {
    root: true,
    parser: 'babel-eslint',
    parserOptions: {
        sourceType: 'module'
    },
    env: {
        browser: true,
    },
    extends: 'airbnb-base',
    // required to lint *.vue files
    plugins: [
        'html'
    ],

    globals: {
        axios: true,
        store: true,
    },

    // add your custom rules here
    rules: {

        indent: ['warn', 4],
        'max-len': ['warn', { 'code': 180 }],
        'prefer-arrow-callback': [ 'warn', { 'allowUnboundThis': true } ],
        'arrow-body-style': 0,
        'no-shadow': ['error', { 'allow': [
            'state'
        ]}],
        'no-underscore-dangle': 0,
        'no-plusplus': 0,

        // don't require .vue extension when importing
        'import/extensions': ['error', 'ignorePackages', {
            js: 'never',
            vue: 'never'
        }],

        'import/prefer-default-export': 0,
        'import/no-unresolved': 0,
        'global-require': 0,

        'no-restricted-syntax': [
            'error',
            'ForInStatement',
            'LabeledStatement',
            'WithStatement',
        ],

        "no-mixed-operators": [ "error", {
            "allowSamePrecedence": true
        }],


        // disallow reassignment of function parameters
        // disallow parameter object manipulation except for specific exclusions
        'no-param-reassign': ['error', {
            props: false,
        }],
        // allow debugger during development
        'no-debugger': process.env.NODE_ENV === 'production' ? 'error' : 'off',

        // allow console log during development
        'no-console': process.env.NODE_ENV === 'production' ? 'error' : 'off',

        // allow padded blocks
        'padded-blocks': ["off", "always"]
    }
}
