import Api from '@/api/index';

class Halls extends Api {

  /**
   * Вернет список всех залов
   * @returns {Promise<Response>}
   */
  halls = () => this.rest('/halls/list.json');

  /**
   * Удалит зал по id
   * @param id
   * @returns {Promise<*>}
   */
  remove = ( id ) => this.rest('/halls/delete-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify({ id }),
  }).then(() => id) // then - заглушка, пока метод ничего не возвращает

  /**
   * Создаст новую запись в таблице
   * @param hall объект группы, взятый из Formhalls
   * @returns {Promise<Response>}
   */
  add = ( hall ) => this.rest('halls/add-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(hall),
  }).then(() => ({...hall, id: new Date().getTime()})) // then - заглушка, пока метод ничего не возвращает

  /**
   * Отправит измененную запись
   * @param hall объект группы, взятый из Formhalls
   * @returns {Promise<*>}
   */
  update = ( hall ) => this.rest('halls/update-item', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(hall),
  }).then(() => hall) // then - заглушка, пока метод ничего не возвращает

  filter = ( param ) => this.rest('/halls/filter', {
    method: 'POST',
    'Content-Type': 'application/json',
    body: JSON.stringify(param),
  }).then(() => param) // then - заглушка, пока метод ничего не возвращает

}

export default new Halls();
