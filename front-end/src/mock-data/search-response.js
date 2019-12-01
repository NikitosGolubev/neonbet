import MockUsers from './users';
import MockArticles from './articles';

const possibleResponses = [
  ['USERS', MockUsers],
  ['ARTICLES', MockArticles],
  ['NOT FOUND', []]
];

function rand(min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

export default function getResponse() {
    let [type, response] = possibleResponses[rand(0, (possibleResponses.length-1))];

    return {
        type: type,
        response: response
    };
};
