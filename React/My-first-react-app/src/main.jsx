import { createRoot } from 'react-dom/client'

const myVariable=(
  <table border="2">
    <tr>
      <td>Id</td>
      <td>Name</td>
      <td>Address</td>
    </tr>
    <tr>
      <td>01</td>
      <td>John</td>
      <td>Kigali</td>
    </tr>
    <tr>
      <td>02</td>
      <td>Peter</td>
      <td>Huye</td>
    </tr>
  </table>
)
createRoot(document.getElementById('root')).render(
  myVariable,
)
