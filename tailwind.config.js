module.exports = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      colors: {
        'violet-blue-1': '#875DFF',
        'violet-blue-2': '#794BFF',
        'navy-blue': '#0B036B',
        'deep-violet': '#1D0070',
        'white': '#FFFFFF',
        'outer-space': '#484848',
      },
      
      fontFamily: {
        'lato': ['Lato', 'sans-serif']
      },
      
      backgroundImage: {
        'index-top': '',
        'index-bottom': '',
      }
    },
  },
  plugins: [],
};
