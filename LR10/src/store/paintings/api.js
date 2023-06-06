import Api from '@/api/index';

class paintings extends Api {

  /**
   * Вернет список всех студентов
   * @returns {Promise<Response>}
   */
  paintings = () => this.rest('/paintings/list.json');

  /**
   * Удалит студента по id
   * @param id
   * @returns {Promise<*>}
   */
  remove = ( id ) => this.rest('/paintings/delete-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  }).then(() => id) // then - заглушка, пока метод ничего не возвращает

  /**
   * Создаст новую запись в таблице
   * @param painting объект студента, взятый из Formpainting
   * @returns {Promise<Response>}
   */
  add = ( painting ) => this.rest('/paintings/add-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(painting),
  }).then(() => ({...painting, id: new Date().getTime()})) // then - заглушка, пока метод ничего не возвращает

  /**
   * Отправит измененную запись
   * @param painting объект студента, взятый из Formpainting
   * @returns {Promise<*>}
   */
  update = ( painting ) => this.rest('/paintings/update-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(painting),
  }).then(() => painting) // then - заглушка, пока метод ничего не возвращает

  filter = ( param ) => this.rest('/paintings/filter', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(param),
  }).then(() => param) // then - заглушка, пока метод ничего не возвращает

}

export default new paintings();
