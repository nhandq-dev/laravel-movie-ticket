const Ziggy = {"url":"http:\/\/localhost:8000","port":8000,"defaults":{},"routes":{"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"admin.register":{"uri":"admin\/register\/secret_path_5xz20rvwg3hoKk5Lnhx","methods":["GET","HEAD"]},"admin.login":{"uri":"admin\/login","methods":["GET","HEAD"]},"admin.password.request":{"uri":"admin\/forgot-password","methods":["GET","HEAD"]},"admin.password.email":{"uri":"admin\/forgot-password","methods":["POST"]},"admin.password.reset":{"uri":"admin\/reset-password\/{token}","methods":["GET","HEAD"]},"admin.password.store":{"uri":"admin\/reset-password","methods":["POST"]},"admin.verification.notice":{"uri":"admin\/verify-email","methods":["GET","HEAD"]},"admin.verification.verify":{"uri":"admin\/verify-email\/{id}\/{hash}","methods":["GET","HEAD"]},"admin.verification.send":{"uri":"admin\/email\/verification-notification","methods":["POST"]},"admin.password.confirm":{"uri":"admin\/confirm-password","methods":["GET","HEAD"]},"password.update":{"uri":"admin\/password","methods":["PUT"]},"admin.logout":{"uri":"admin\/logout","methods":["POST"]},"admin.profile.edit":{"uri":"admin\/profile","methods":["GET","HEAD"]},"admin.profile.update":{"uri":"admin\/profile","methods":["PATCH"]},"admin.profile.destroy":{"uri":"admin\/profile","methods":["DELETE"]},"admin.dashboard":{"uri":"admin\/dashboard","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };