export const myPromise = () => new Promise( (resolve, reject) => {
  setTimeout( () => resolve('Deu Bom'), 2000 );
} );

/**
 * This is working, but there are a tool who easily the entire process. 
 * This tool is "async/await". We yet have babel version that isn't compatible 
 * with this resource, in other words, we most install an extra plugin:
 * 
 * @babel/plugin-transform-async-to-generator
 * // This will be referenced on babel-plugins (package.json)
 * 
 * And also: 
 * 
 * @babel/polyfill
 * // This will be referenced on entry (webpack.config.js)
 */
/**
 * "async" tag who defines a assincrone function. This method replace the 
 * "event cascade" expressed for .then and .catch.
 */
export async function promiseExecutor() {
  /**
   * "await" ensure all the process, because what is below him only will be 
   * executed when yourself process is terminated.
   */
  /**
   * The "await" tag only can be present when is nested on "async" function escope.
   */
  const response = await myPromise();

  for (let counter = 0; counter <= 3; counter++) {
    console.log(await myPromise());
    console.log(response);
  }
}

/**
 * Translating on a arrow function:
 */
export const otherPromiseExecutor = async () => {
  for (let counter = 0; counter <= 3; counter++) {
    console.log(await myPromise());
  }
};
